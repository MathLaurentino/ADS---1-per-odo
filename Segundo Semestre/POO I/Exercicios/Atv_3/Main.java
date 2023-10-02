import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.text.DecimalFormat;
import java.util.List;

public class Main {

    BufferedReader reader;
    DecimalFormat df;

    Transportadora transportadora;

    public static void main(String[] args) throws Exception{
        
        Main main = new Main();
        main.reader = new BufferedReader(new InputStreamReader(System.in));

        System.out.println(
            "---- ! ATENCAO ! ----\n" + 
            "1 - Ao informar nomes de arquivos não coloque a extencao!\n" + 
            "2 - Todos os arquivos devem estar na pasta 'files'!"
        );
        
        //Carrega as configurações
        main.transportadora = new Transportadora();
        main.carregarConfiguracoes();

        //Carrega o Menu
        main.menu();

    }

    private void menu() throws Exception {
  
        String opcao = "";

        while (!opcao.equals("5")) {

            System.out.println("----------------------");
            System.out.println("[1] Importar arquivo de encomendas");
            System.out.println("[2] Exibir a lista de encomendas Normais");
            System.out.println("[3] Exibir a lista de encomendas Expressas");
            System.out.println("[4] Exibir encomendas expressas por prazo");
            System.out.println("[5] Sair");
            opcao = this.reader.readLine();

            switch (opcao) {
                case "1":
                    this.importarArquivoDeEcomenda();
                    break;
                case "2":
                    this.encomendasNormais();
                    break;
                case "3":
                    this.encomendasExpressa();
                    break;
                case "4":
                    this.encomendasExpressaPrazo();
                default:
                    break;
            }

        }

        this.reader.close();
    }


    private void carregarConfiguracoes() throws Exception {

        boolean arqExiste;
        String nomeArquivoConfig;

        do {
            System.out.println("Informe o nome do arquivo de Configuracao:");
            nomeArquivoConfig = this.reader.readLine();

            arqExiste = VerificadorDeArquivo.verificarSeArquivoExiste("files/" + nomeArquivoConfig + ".csv");
            if (!arqExiste) {
                System.out.println("Aquivo não existe!");
            }
        } while (arqExiste != true);

        this.transportadora.carregarConfiguracoes(nomeArquivoConfig);
    }


    private void importarArquivoDeEcomenda() throws Exception{

        boolean arqExiste;
        String nomeArquivoEncomenda;

        do {
            System.out.println("Informe o nome do arquivo de Encomendas:");
            nomeArquivoEncomenda = this.reader.readLine();

            arqExiste = VerificadorDeArquivo.verificarSeArquivoExiste("files/" + nomeArquivoEncomenda + ".csv");
            if (!arqExiste) {
                System.out.println("Aquivo não existe!");
            }
        } while (arqExiste != true);

        this.transportadora.importarDados(nomeArquivoEncomenda);
    }


    private void encomendasNormais() {

        EncomendaNormal[] encomendas = this.transportadora.getArrayEncomendaNormal();        
        int qtNormais = this.transportadora.getQtNormal();
        float taxaFrete = this.transportadora.getTaxaNormal();
        
        System.out.println("Num Pedido  |  Data Postagem  |  Peso  | Frete");
        for (int i = 0; i < qtNormais; i++) {
            EncomendaNormal encomenda = encomendas[i];
            System.out.printf("%-12d | %-15s | %.2f | %.2f%n",
                encomenda.getNumPedido(),
                encomenda.getDataPostagem(),
                encomenda.getPeso(),
                encomenda.calcularValorFrete(taxaFrete)
            );
        }
    }

    private void encomendasExpressa() {
        EncomendaExpressa[] encomendas = this.transportadora.getArrayEncomendaExpressa();
        int qtExpressa = this.transportadora.getQtExpressa();
        float taxaFrete = this.transportadora.getTaxaExpressa();
    
        System.out.println("Num Pedido  |  Data Postagem  |  Prazo Entrega | Fone de Contato | Peso  |  Frete");
        for (int i = 0; i < qtExpressa; i++) {
            EncomendaExpressa encomenda = encomendas[i];
    
            System.out.printf("%-12d | %-15s | %-14d | %-15s | %.2f | %.2f%n",
                encomenda.getNumPedido(),
                encomenda.getDataPostagem(),
                encomenda.getPrazoDeEntrega(),
                encomenda.getFoneDeContato(),
                encomenda.getPeso(),
                encomenda.calcularValorFrete(taxaFrete)
            );
        }
    }

    private void encomendasExpressaPrazo() throws Exception{

        System.out.println("Informe o prazo desejado (numero inteiro)");
        int prazo = Integer.parseInt(this.reader.readLine());

        List<EncomendaExpressa> encomendas = this.transportadora.getEncomendasPrazo(prazo);
        float taxaFrete = this.transportadora.getTaxaExpressa();

        for (EncomendaExpressa encomenda : encomendas) {
            System.out.printf("%-12d | %-15s | %-14d | %-15s | %.2f | %.2f%n",
                encomenda.getNumPedido(),
                encomenda.getDataPostagem(),
                encomenda.getPrazoDeEntrega(),
                encomenda.getFoneDeContato(),
                encomenda.getPeso(),
                encomenda.calcularValorFrete(taxaFrete)
            );
        }
    }
    

}