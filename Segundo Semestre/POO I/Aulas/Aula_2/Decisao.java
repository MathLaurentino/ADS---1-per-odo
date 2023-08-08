public class Decisao {
    public static void main(String[] args){

        // if (args.length < 2) {
        //     System.out.println("O programa precisa de 2 parâmetro");
        //     System.exit(0);
        // }

        // Integer valor1 = Integer.parseInt(args[0]);
        // Integer valor2 = Integer.parseInt(args[1]);

        Integer valor1 = 6;
        Integer valor2 = 5;

        OperacoesMatematicas opMet = new OperacoesMatematicas();

        if (valor1 < 5) {
            System.out.println("Multiplicando...");
            System.out.println(opMet.multiplicar(valor1, valor2));
        } else {
            System.out.println("opMet");
        }

    }
}
