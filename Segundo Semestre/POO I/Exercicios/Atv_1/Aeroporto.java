import java.io.BufferedReader;
import java.io.InputStreamReader;

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

        while (!opcao.equals(4)) {

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
                    // this.consultarTurma();

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

        }
    }

    private void listarVoos() throws Exception {

        System.out.println("Relatioria de Voos: ");
        for (int i=0; i<this.companhia.getQtdeVoo(); i++) {
            Voo v = this.companhia.getVoo(i);

            v.toString();
        }

    }
}
