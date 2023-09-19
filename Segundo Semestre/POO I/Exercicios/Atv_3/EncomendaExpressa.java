public class EncomendaExpressa extends Encomenda{

    private int prazoDeEntrega; 
    private String foneDeContato;

    // CONSTRUCTORS

    public EncomendaExpressa () {

    }
    public EncomendaExpressa(int numPedido, String dataPostagem, float peso, int prazoDeEntrega, String foneDeContato) {
        super(numPedido, dataPostagem, peso);
        this.prazoDeEntrega = prazoDeEntrega;
        this.foneDeContato = foneDeContato;
    }


    // METODOS
    public float calcularValorFrete(float precoKg) {
        if (this.getPrazoDeEntrega() > 2) {
            return this.getPeso() * precoKg;
        } else {
            return (float) (this.getPeso() * precoKg *  1.25);
        }
    }

    
    // GETTERS AND SETTERS
    public int getPrazoDeEntrega() {
        return prazoDeEntrega;
    }
    public void setPrazoDeEntrega(int prazoDeEntrega) {
        this.prazoDeEntrega = prazoDeEntrega;
    }

    public String getFoneDeContato() {
        return foneDeContato;
    }
    public void setFoneDeContato(String foneDeContato) {
        this.foneDeContato = foneDeContato;
    }
}
