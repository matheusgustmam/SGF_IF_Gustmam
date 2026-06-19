<?php

namespace controller;

use DateTime;
use Exception;
use dao\ClienteDAO;
use dao\CidadeDAO;
Use model\Cidade;
Use model\Clientes;
Use utils\FileUpload;

class ClienteController
{

    public function novo()
    {
        try {
            $cliente = new Cliente();
            //
            $cidades = CidadeDAO::listar();
            require __DIR__ . "/../view/novoClienteView.php";
        } catch (Exception $e) {
            echo 'Falha ao fazer o cadastro: ' . $e->getMessage();
            header("Location: " . BASE_URL . '/cliente');
        }
    }

    public function cadastrar()
    {
        try {
            $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
            $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_CHARS);
            $data_nascimento = filter_input(INPUT_POST, "data_nascimento", FILTER_SANITIZE_SPECIAL_CHARS);

            $cidade_id = filter_input(INPUT_POST, 'cidade_id', FILTER_SANITIZE_NUMBER_INT);

            $cliente = $id ? ClienteDAO::buscarId($id) : new Cliente();
            if (empty($cliente))
                throw new Exception("Cliente não encontrado");

            $cidade = $cidade_id ? CidadeDAO::buscarID($cidade_id) : null;
            if (empty($cidade) || $cidade === null) ;

            $endereco = $cliente->getEndereco() ?? new Endereco();

            $endereco->setCidade($cidade);

            $cliente->setNome($nome);
            $cliente->setCpf($cpf);
            $cliente->setData_nascimento(new DateTime($data_nascimento));

            $cliente->setEndereco($endereco);

            if (!empty($_FILES['imagem_cliente']['tmp_name'])) {
                if (!empty($cliente->getUrlFotoPerfil())) {
                    $imagemAntiga = $cliente->getUrlFotoPerfil();
                }
                $uploadResult = FileUpload::uploadImagem(
                    "clientes",
                    $_FILES['imagem_cliente']['tmp_name'],
                    uniquid("imagem_do_clientes_")
                );
                $cliente->setUrlFotoPerfil($uploadResult['secure_url']);
            }

            ClienteDAO::salvar($cliente);

            if (!empty($imagemAntiga)) {
                FileUpload::deleteImagem("clientes", $imagemAntiga);
            }

            header('Location:' . BASE_URL . '/cliente');

        } catch (Exception $ex) {

            if(!empty($umploadResult['secure_url'])){
                FileUpload::deleteImagem("clientes", $uploadResult['secure_url']);
            }
            echo 'falha ao fazer upload: ' . $ex->getMessage();
            header('Location: ' . BASE_URL . '/cliente/novo');
        } finally {
            exit;
        }

    }

    public function editar(array $params)
    {
        try {
            $id = $params["id"];
            $cliente = ClienteDAO::buscarId($id);
            if (empty($cliente)) {
                throw new Exception("Cliente não encontrado");
            }
            $cidades = CidadeDAO::listar();

            ClienteDAO::deletar($cliente);

            if(!empty($cliente->getUrlFotoPerfil())){
                FileUpload::deleteImagem("clientes", $cliente->getUrlFotoPerfil());
            }

        } catch (Exception $ex) {
            echo 'Falha ao fazer upload: ' . $ex->getMessage();
        } finally {
            header('Location: ' . BASE_URL . '/cliente');
            exit;
        }
    }



}