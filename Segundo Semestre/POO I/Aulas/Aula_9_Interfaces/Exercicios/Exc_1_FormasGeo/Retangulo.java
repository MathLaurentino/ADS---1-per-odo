public class Retangulo implements FormaGeometrica{
    private float base;
    private float altura;

    public float calcularArea() {
        return altura * base;
    }

    
    public float getBase() {
        return base;
    }
    public void setBase(float base) {
        this.base = base;
    }

    public float getAltura() {
        return altura;
    }
    public void setAltura(float altura) {
        this.altura = altura;
    }

}
