import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.InputStreamReader;
import java.text.DecimalFormat;

public class Main {

    double margemLucro;
    BufferedReader reader;
    BufferedReader readerFile;
    BufferedWriter whiterFile;
    DecimalFormat df;

    public static void main(String[] args) throws Exception {
        
        Main main = new Main();

        main.reader = new BufferedReader(new InputStreamReader(System.in));        
        main.readerFile = new BufferedReader(new FileReader("./files/preco_custo.csv"));
        main.whiterFile = new BufferedWriter(new FileWriter("./files/preco_venda.csv"));
        main.df = new DecimalFormat("#.00");

        System.out.println("Informe a margem de lucro desejada: ");
        main.margemLucro = Double.parseDouble(main.reader.readLine());

        main.escreverArquivo(main.margemLucro);

    }

    private void escreverArquivo(double margemLucro) throws Exception {

        readerFile.readLine();
        String linha;

        String cabecalho = "Produto;Preço;Estoque";
        this.whiterFile.write(cabecalho);
        this.whiterFile.newLine();

        while ((linha = readerFile.readLine()) != null) {
            
            String[] array = linha.split(";");

            String precoVendaString = array[3].replace(",", ".");
            Double precoVendaDouble = Double.parseDouble(precoVendaString);
            int codigo = Integer.parseInt(array[0]);

            Produto produto = new Produto();
            produto.setCodigo(codigo);
            produto.setNomeProduto(array[2]);
            produto.setPrecoVenda(precoVendaDouble, margemLucro);

            this.adicionarLinha(produto);
        }

        this. whiterFile.close();
    }

    private void adicionarLinha(Produto produto) throws Exception {

        String linha = produto.getCodigo() + ";" + produto.getNomeProduto() + ";" + df.format(produto.getPrecoVenda());
        this.whiterFile.write(linha);
        this.whiterFile.newLine();

    }

}
