public class Circulo implements FormaGeometrica{

    private float raio;

    public float getRaio() {
        return raio;
    }

    public void setRaio(float raio) {
        this.raio = raio;
    }
    public float calcularArea() {
        return (float) (raio* raio * 3.14);
    }    
}
