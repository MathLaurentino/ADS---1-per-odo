import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.InputStreamReader;
import java.text.DecimalFormat;

public class Main {

    double margemLucro;
    String nomeArquivoEntrada;
    String nomeArquivoSaida;
    
    BufferedReader reader;
    BufferedReader readerFile;
    BufferedWriter whiterFile;    
    BufferedWriter comprarWriter;

    DecimalFormat df;

    public static void main(String[] args) throws Exception {
        
        Main main = new Main();

        main.reader = new BufferedReader(new InputStreamReader(System.in));        
        
        main.menu();

        main.readerFile = new BufferedReader(new FileReader("./files/" + main.nomeArquivoEntrada + ".csv"));
        main.whiterFile = new BufferedWriter(new FileWriter("./files/" + main.nomeArquivoSaida + ".csv"));
        main.comprarWriter = new BufferedWriter(new FileWriter("./files/" + "comprar.csv"));
        main.df = new DecimalFormat("#.00");

        main.escreverArquivos();

    }


    private void menu() throws Exception {
  
         // Solicitar a margem de lucro ao usuário
        System.out.print("Informe a margem de lucro a ser aplicada: ");
        this.margemLucro = Double.parseDouble(this.reader.readLine());

        // Solicitar o nome do arquivo de entrada e saída
        System.out.print("Informe o nome do arquivo de entrada (ou deixe em branco para padrão): ");
        this.nomeArquivoEntrada = this.reader.readLine().trim();
        if (nomeArquivoEntrada.isEmpty()) {
            this.nomeArquivoEntrada = "preco_custo";
        }

        System.out.print("Informe o nome do arquivo de saída (ou deixe em branco para padrão): ");
        this.nomeArquivoSaida = this.reader.readLine().trim();
        if (this.nomeArquivoSaida.isEmpty()) {
            this.nomeArquivoSaida = "preco_venda";
        }

        this.reader.close();

    }


    private void escreverArquivos() throws Exception {

        readerFile.readLine();
        String linha;

        String cabecalhoVender = "Produto;Preço;Estoque";
        this.whiterFile.write(cabecalhoVender);
        this.whiterFile.newLine();

        String cabecalhoComprar = "codigo;estoque;produto;preco_custo;categoria";
        comprarWriter.write(cabecalhoComprar);
        comprarWriter.newLine();

        while ((linha = readerFile.readLine()) != null) {
            
            String[] array = linha.split(";");

            int codigo = Integer.parseInt(array[0]);
            String nomeProduto = array[2];
            String precoCustoString = array[3].replace(",", ".");
            Double precoCustoDouble = Double.parseDouble(precoCustoString);

            
            Produto produto = new Produto();
            produto.setCodigo(codigo);
            produto.setNomeProduto(nomeProduto);
            produto.setPrecoVenda(precoCustoDouble, this.margemLucro);
            
            this.adicionarLinha(produto);

            String estoque = array[1];
            // Verificar se o estoque é inferior a 10 e escrever no arquivo comprar.csv
            if (Integer.parseInt(estoque) < 10) {
                comprarWriter.write(linha);
                comprarWriter.newLine();
            }
        }

        this.whiterFile.close();
        this.readerFile.close();
        this.comprarWriter.close();

        System.out.println("Arquivos de saída gerados com sucesso.");
    }



    private void adicionarLinha(Produto produto) throws Exception {

        String linha = produto.getCodigo() + ";" + produto.getNomeProduto() + ";" + df.format(produto.getPrecoVenda());
        this.whiterFile.write(linha);
        this.whiterFile.newLine();

    }

}
