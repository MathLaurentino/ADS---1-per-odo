public abstract class Encomenda {

    private int numPedido;
    private String dataPostagem; 
    private float peso;

    
    public Encomenda() {

    }

    public Encomenda(int numPedido, String dataPostagem, float peso) {
        this.numPedido = numPedido;
        this.dataPostagem = dataPostagem;
        this.peso = peso;
    }


    // GETTERS AND SETTERS
    public int getNumPedido() {
        return numPedido;
    }
    public void setNumPedido(int numPedido) {
        this.numPedido = numPedido;
    }

    public String getDataPostagem() {
        return dataPostagem;
    }
    public void setDataPostagem(String dataPostagem) {
        this.dataPostagem = dataPostagem;
    }

    public float getPeso() {
        return peso;
    }
    public void setPeso(float peso) {
        this.peso = peso;
    }
    
}