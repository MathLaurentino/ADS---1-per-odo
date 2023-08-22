import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.util.ArrayList;

public class Aeroporto {
    Companhia companhia;
    BufferedReader reader;

    public static void main(String[] args) throws Exception {
        
        Aeroporto ae = new Aeroporto();
        ae.companhia = new Companhia();
        ae.reader = new BufferedReader(new InputStreamReader(System.in));

        ae.menu();

    }

    private void menu() throws Exception {
        String opcao = "";

        while (!opcao.equals("4")) {

            System.out.println("----------------------");
            System.out.println("[1] Cadastrar novo voo");
            System.out.println("[2] Listar voos existentes");
            System.out.println("[3] Consultar um voo");
            System.out.println("[4] Sair");
            opcao = this.reader.readLine();

            switch (opcao) {
                case "1":
                    this.cadastrarVoo();
                    break;
                case "2":
                    this.listarVoos();
                    break;
                case "3":
                    this.consultarVoo();

                default:
                    break;
            }

        }
    }

    private void cadastrarVoo() throws Exception {
        Voo v = new Voo();

        System.out.println("CADASTRO DE TURMA");

        System.out.println("Destino: ");
        v.setDestino(reader.readLine());

        System.out.println("Número do voo: ");
        v.setNumeroVoo(Integer.parseInt(reader.readLine()));

        System.out.println("-- Passageiros --");
        for (int i = 0; i < 40; i++) {

            System.out.println("Nome Passageiro: ");
            String nome = reader.readLine();

            if (nome.equals("")) {
                break;
            }

            Passageiro p = new Passageiro();
            p.setNome(nome);

            System.out.println("Sobrenome Passageiro: ");
            p.setSobrenome(reader.readLine());

            System.out.println("Idade Passageiro: ");
            p.setIdade(Integer.parseInt(reader.readLine()));

            System.out.println("Numero Passaporte Passageiro: ");
            p.setNumeroPassaporte(Integer.parseInt(reader.readLine()));

            v.setPassageiro(p);

        }

        this.companhia.setVoo(v);
    }

    private void listarVoos() throws Exception {

        System.out.println("RELATORIO DE VOOS");
        System.out.println(" ");

        for (int i=0; i<this.companhia.getQtdeVoo(); i++) {

            System.out.println("-- Voo Numero " + (i + 1) + " --");
            Voo v = this.companhia.getVoo(i);

            System.out.println("Destino: " + v.getDestino());
            System.out.println("Numero voo: " + v.getNumeroVoo());
            System.out.println("Quantidade de passageiros: " + v.getQtdePassageiro());

            System.out.println(" ");
        }

    }

    private void consultarVoo() throws Exception {

        Voo v;
        int numVoo;
        do {
            System.out.println("Informe o Numero do Voo: ");
            numVoo = Integer.parseInt(reader.readLine());

            if (numVoo >= 1 && numVoo <= this.companhia.getQtdeVoo()) {
                v = this.companhia.getVoo(numVoo - 1);
            } else {
                System.out.println("Número de voo inválido.");
                v = null;
            }
        } while (!(v instanceof Voo));

        System.out.println("");
        System.out.println("-- DADOS DO VOO " + numVoo + " --");

        System.out.println("Destino: " + v.getDestino());
        System.out.println("Numero voo: " + v.getNumeroVoo());
        System.out.println("Quantidade de passageiros: " + v.getQtdePassageiro());
        System.out.println("Assentos livres no voo: " + (40 - v.getQtdePassageiro()));
        
        System.out.println("");
        System.out.println( "PASSAGEIROS: ");

        for (int y=0; y<v.getQtdePassageiro(); y++) {
            Passageiro p = v.getPassageiro(y);

            System.out.println("Nome: " + p.getNome() + " " + p.getSobrenome());
            System.out.println("Idade: " + p.getIdade());
            System.out.println("Passaporte: " + p.getNumeroPassaporte());
            System.out.println(" ");
        }

    }
}
