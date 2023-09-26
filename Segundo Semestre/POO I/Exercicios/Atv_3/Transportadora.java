import java.io.BufferedReader;
import java.io.FileReader;

public class Transportadora implements ImportacaoArquivos{

    // Arrays para armazenar encomendas normais e expressas
    private EncomendaNormal[] arrayNormal = new EncomendaNormal[1000];
    private EncomendaExpressa[] arrayExpressa = new EncomendaExpressa[1000];

    // Contadores para acompanhar a quantidade de encomendas normais e expressas no sistema
    private int qtNormal = 0;
    private int qtExpressa = 0;

    // Taxas de envio para encomendas normais e expressas
    private float taxaNormal;
    private float taxaExpressa;


    /**
     * Carrega as configurações da transportadora a partir de um arquivo CSV.
     * @param arqConfig Nome do arquivo de configuração (sem extensão) contendo as informações.
     */
    public void carregarConfiguracoes(String arqConfig) throws Exception { 

        BufferedReader readerFile = new BufferedReader(
            new FileReader("./files/" + arqConfig + ".csv")
        );

        String linha;
        while ((linha = readerFile.readLine()) != null) {
            String[] array = linha.split(";");
            if (array[1].equals("EN")) 
                taxaNormal = Float.parseFloat(array[2]);
            else if (array[1].equals("EE"))
                taxaExpressa = Float.parseFloat(array[2]);
        }

        readerFile.close();

    }


    /**
     * Importa os dados de encomendas a partir de um arquivo CSV.
     * @param arqDadosEntrada Nome do arquivo de dados de entrada (sem extensão) contendo as informações das encomendas.
     */
    public void importarDados(String arqDadosEntrada) throws Exception {

        BufferedReader readerFile = new BufferedReader(
            new FileReader("./files/" + arqDadosEntrada + ".csv")
        );

        String linha;
        readerFile.readLine();
        while ((linha = readerFile.readLine()) != null) {
            String[] encomenda = linha.split(";");
            importarEncomenda(encomenda); 
        }

        readerFile.close();

    }


    /**
     * Cria uma instancia de EncomendaNormal ou EncomendaExpressa e chama o
     * metodo de adição ao arrayNormal ou arrayExpresso.
     * @param encomenda Array de strings contendo informações da encomenda.
     */
    private void importarEncomenda(String[] encomenda) {

        if (encomenda[2].equals("EN")) {
            EncomendaNormal encomendaNormal = new EncomendaNormal();
            encomendaNormal.setNumPedido(Integer.parseInt(encomenda[0]));
            encomendaNormal.setDataPostagem(encomenda[1]);
            encomendaNormal.setPeso(Float.parseFloat(encomenda[4])); 
            this.addNormal(encomendaNormal);
        } 
        else if (encomenda[2].equals("EE")) {
            EncomendaExpressa encomendaExpressa = new EncomendaExpressa();
            encomendaExpressa.setNumPedido(Integer.parseInt(encomenda[0]));
            encomendaExpressa.setDataPostagem(encomenda[1]);
            encomendaExpressa.setPeso(Float.parseFloat(encomenda[4])); 
            encomendaExpressa.setFoneDeContato(encomenda[5]);
            encomendaExpressa.setPrazoDeEntrega(Integer.parseInt(encomenda[3]));
            this.addExpressa(encomendaExpressa);
        }
        
    }

    /**
     * Adiciona uma encomenda do tipo normal ao array de encomendas normais.
     * @param encomendaNormal A encomenda normal a ser adicionada.
     */
    private void addNormal(EncomendaNormal encomendaNormal) {
        if (qtNormal < arrayNormal.length) {
            arrayNormal[qtNormal] = encomendaNormal;
            qtNormal++;
        } else {
            System.out.println("O limite de encomendas foi atingido.");
        }
    }


    /**
     * Adiciona uma encomenda do tipo expressa ao array de encomendas expressas.
     * @param encomendaExpressa A encomenda expressa a ser adicionada.
     */
    private void addExpressa(EncomendaExpressa encomendaExpressa) {
        if (qtExpressa < arrayExpressa.length) {
            arrayExpressa[qtExpressa] = encomendaExpressa;
            qtExpressa++;
        } else {
            System.out.println("O limite de encomendas foi atingido.");
        }
    } 


    // GETTERS //
    public EncomendaNormal[] getArrayEncomendaNormal() {
        return arrayNormal;
    }
    public EncomendaExpressa[] getArrayEncomendaExpressa() {
        return arrayExpressa;
    }

    public float getTaxaNormal() {
        return taxaNormal;
    }
    public float getTaxaExpressa() {
        return taxaExpressa;
    }

    public int getQtNormal() {
        return qtNormal;
    }
    public int getQtExpressa() {
        return qtExpressa;
    }
       
}
