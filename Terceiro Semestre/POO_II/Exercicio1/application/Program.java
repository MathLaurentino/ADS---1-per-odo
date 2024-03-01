package application;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.util.ArrayList;
import java.util.List;

import entities.Cliente;

public class Program{
    
    BufferedReader reader;
    List<Cliente> clientes;

    public static void main(String[] args) throws Exception {
        
        Program pg = new Program();
        pg.clientes = new ArrayList<>();
        pg.reader = new BufferedReader(new InputStreamReader(System.in));

        pg.menu();
    }

    private void menu() throws Exception {
        String opcao = "";

        while (!opcao.equals("5")) {

            System.out.println("----------------------");
            System.out.println("[1] Cadastrar cliente");
            System.out.println("[2] Listar clientes");
            System.out.println("[3] Cadastrar orçamento para um cliente");
            System.out.println("[4] Listar orçamentos de um cliente");
            System.out.println("[5] Sair");
            opcao = this.reader.readLine();

            switch (opcao) {
                case "1":
                    this.cadastrarCliente();
                    break;
                case "2":
                    this.listarClientes();
                    break;
                case "3":
                    this.cadastrarOrcamento();
                    break;
                case "4":
                    this.listarOrcamento();
                    break;
                default:
                    break;
            }

        }
    }

    private void cadastrarCliente() throws IOException {
        Cliente c = new Cliente();
        System.out.println("--- CADASTRO DE CLIENTE ---");

        System.out.println("Nome: ");
        c.setNome(reader.readLine());
        System.out.println("Email: ");
        c.setEmail(reader.readLine());

        this.clientes.add(c);
    }

    private void listarClientes() {
        System.out.println("--- LISTAGEM DE CLIENTES ---");
        for (int y=0; y < clientes.size(); y++) {
            System.out.println("Index: " + y);
            System.out.println("Nome: " + clientes.get(y).getNome());
            System.out.println("Email: " + clientes.get(y).getEmail() + "\n");
        }
    }

    private void cadastrarOrcamento() throws NumberFormatException, IOException {
        System.out.println("--- CADASTRO DE ORCAMENTO PARA CLIENTE ---");
        System.out.println("Index do cliente: ");
        int index = Integer.parseInt(reader.readLine());

        if (index > clientes.size()) {
            System.out.println("Cliente informado não existe");
        } 
        else {
            System.out.println("Informe o orçamento para o cliente de nome " + clientes.get(index).getNome() + ": ");
            Float orcamento  =Float.parseFloat(reader.readLine());
            clientes.get(index).addOrcamento(orcamento);
        } 
    }

    private void listarOrcamento() throws NumberFormatException, IOException {
        System.out.println("--- LISTAGEM DE ORÇAMENTO DO CLIENTE ---");
        System.out.println("Index do cliente: ");
        int index = Integer.parseInt(reader.readLine());

        if (index > clientes.size()) {
            System.out.println("Cliente informado não existe");
        }
        else {
            int num = 1;
            for (Float orcamento : clientes.get(index).getOrcamentos()) {
                System.out.println("Orçamento " + num + ": " + orcamento);
                num++;
            }
        }
    }

}