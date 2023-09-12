public class Main {

    public static void main(String[] args) {
        
        Circulo c = new Circulo();
        c.setRaio(3);
        System.out.println("Area do circulo: " + c.calcularArea());

        Quadrado q = new Quadrado();
        q.setLateral((float) 3.5);
        System.out.println("Area do quadrado: " + q.calcularArea());

        Retangulo r = new Retangulo();
        r.setAltura((float) 5.10);
        r.setBase((float) 3.0);
        System.out.println("Area do retangulo: " + r.calcularArea());

    }

}
