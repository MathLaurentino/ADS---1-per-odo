public class EncomendaNormal extends Encomenda{
    
    public float calcularValorFrete(float precoKg) {
        return this.getPeso() * precoKg;
    }

}
