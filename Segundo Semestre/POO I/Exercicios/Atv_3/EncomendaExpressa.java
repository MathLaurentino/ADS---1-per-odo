public class EncomendaExpressa extends Encomenda{

    private int prazoDeEntrega; 
    private String foneDeContato;

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
