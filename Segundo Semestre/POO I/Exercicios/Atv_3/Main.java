import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.text.DecimalFormat;

public class Main {

    BufferedReader reader;
    DecimalFormat df;

    Transportadora transportadora;

    public static void main(String[] args) throws Exception{
        
        Main main = new Main();
        main.reader = new BufferedReader(new InputStreamReader(System.in));

        //Carrega as configurações
        main.transportadora = new Transportadora();
        main.carregarConfiguracoes();

        //Carrega o Menu
        main.menu();

    }

    private void menu() throws Exception {
  
        String opcao = "";

        while (!opcao.equals("4")) {

            System.out.println("----------------------");
            System.out.println("[1] Importar arquivo de encomendas");
            System.out.println("[2] Exibir a lista de encomendas Normais");
            System.out.println("[3] Exibir a lista de encomendas Expressas");
            System.out.println("[4] Sair");
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
                default:
                    break;
            }

        }

        this.reader.close();
    }


    private void carregarConfiguracoes() throws Exception {
        System.out.println("Informe o nome do arquivo de Configuracao:");
        String nomeArquivoConfig = this.reader.readLine();
        this.transportadora.carregarConfiguracoes(nomeArquivoConfig);
    }


    private void importarArquivoDeEcomenda() throws Exception{
        System.out.println("Informe o nome do arquivo de Encomendas:");
        String nomeArquivoEncomenda = this.reader.readLine();

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

}