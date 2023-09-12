public class Quadrado implements FormaGeometrica{

    private float lateral;

    public float calcularArea() {
        return this.lateral * this.lateral;
    }

    public float getLateral() {
        return lateral;
    }
    public void setLateral(float lateral) {
        this.lateral = lateral;
    }
    
}
