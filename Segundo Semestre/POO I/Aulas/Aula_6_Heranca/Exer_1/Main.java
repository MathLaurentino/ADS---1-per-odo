import java.io.BufferedReader;
import java.io.InputStreamReader;

public class Main {
    
    BufferedReader reader;

    public static void main(String[] args) throws Exception {
        
        Main m = new Main();
        m.reader = new BufferedReader(new InputStreamReader(System.in));        
        m.menu();
        
    }

    private void menu() throws Exception {
        String opcao = "";

        while (!opcao.equals("5")) {

            System.out.println("----------------------");
            System.out.println("[1] Cadastrar cliente");
            System.out.println("[2] Cadastrar gerente");
            System.out.println("[3] Cadastrar vendedor");
            System.out.println("[4] Cadastrar caixa");
            System.out.println("[5] Sair");
            opcao = this.reader.readLine();

            switch (opcao) {
                case "1":
                    this.cadastrarCliente();
                    break;
                case "2":
                    this.cadastrarGerente();
                    break;
                case "3":
                     this.cadastrarVendedor();
                case "4":
                    this.cadastrarCaixa();
                default:
                    break;
            }

        }
    }

    private void cadastrarCliente() throws Exception {

        Cliente cliente = new Cliente();

        System.out.println("Nome: ");
        cliente.setNome(this.reader.readLine());

        System.out.println("Email: ");
        cliente.setEmail(this.reader.readLine());

        System.out.println("Endereco: ");
        cliente.setEndereco(this.reader.readLine());

        System.out.println("Idade: ");
        cliente.setIdade(Integer.parseInt(this.reader.readLine()));

        System.out.println("\n-- DADOS CADASTRADOS --");
        System.out.println("Nome: " + cliente.getNome());
        System.out.println("Email: " + cliente.getEmail());
        System.out.println("Endereco: " + cliente.getEndereco());
        System.out.println("Idade: " + cliente.getIdade());
    }


    private void cadastrarGerente() throws Exception {

        Gerente gerente = new Gerente();

        System.out.println("Nome: ");
        gerente.setNome(this.reader.readLine());

        System.out.println("Idade: ");
        gerente.setIdade(Integer.parseInt(this.reader.readLine()));

        System.out.println("Ano contratacao: ");
        gerente.setAnoContratacao(Integer.parseInt(this.reader.readLine()));

        System.out.println("Formacao academica: ");
        gerente.setFormacaoAcademica(this.reader.readLine());

        System.out.println("Area Atuacao: ");
        gerente.setAreaAtuacao(this.reader.readLine());

        System.out.println("\n-- DADOS CADASTRADOS --");
        System.out.println("Nome: " + gerente.getNome());
        System.out.println("Idade: " + gerente.getIdade());
        System.out.println("Ano contratacao: " + gerente.getAnoContratacao());    
        System.out.println("Formacao academica: " + gerente.getFormacaoAcademica());
        System.out.println("Area Atuacao: " + gerente.getAreaAtuacao());
    }

    private void cadastrarVendedor() throws Exception {
    
        Vendedor vendedor = new Vendedor();

        System.out.println("Nome: ");
        vendedor.setNome(this.reader.readLine());

        System.out.println("Idade: ");
        vendedor.setIdade(Integer.parseInt(this.reader.readLine()));

        System.out.println("Ano contratacao: ");
        vendedor.setAnoContratacao(Integer.parseInt(this.reader.readLine()));

        System.out.println("Area de atuacao: ");
        vendedor.setAreaDeAtuacao(this.reader.readLine());

        System.out.println("Horario de trabalho: ");
        vendedor.setHorarioTrabalho(this.reader.readLine());

        System.out.println("Porcentagem da comissao por verda: ");
        vendedor.setPorcentagemComissao(Float.parseFloat(this.reader.readLine()));

        System.out.println("Quantidade produtos vendidos");
        vendedor.setQuantidadeProdutosVendidos(Integer.parseInt(this.reader.readLine()));

        System.out.println("Salario: ");
        vendedor.setSalario(Float.parseFloat(this.reader.readLine()));

        System.out.println("\n-- DADOS CADASTRADOS --");
        System.out.println("Nome: " + vendedor.getNome());
        System.out.println("Idade: " + vendedor.getIdade());
        System.out.println("Ano contratacao: " + vendedor.getAnoContratacao());
        System.out.println("Area de atuacao: " + vendedor.getAreaDeAtuacao());
        System.out.println("Horario de trabalho: " + vendedor.getHorarioTrabalho());
        System.out.println("Porcentagem da comissao por venda: " + vendedor.getPorcentagemComissao());
        System.out.println("Quantidade produtos vendidos: " + vendedor.getQuantidadeProdutosVendidos());
        System.out.println("Salario: " + vendedor.getSalario());
    }


    private void cadastrarCaixa() throws Exception{
        Caixa caixa = new Caixa();

        System.out.println("Nome: ");
        caixa.setNome(this.reader.readLine());

        System.out.println("Idade: ");
        caixa.setIdade(Integer.parseInt(this.reader.readLine()));

        System.out.println("Salario: ");
        caixa.setSalario(Float.parseFloat(this.reader.readLine()));

        System.out.println("Ano contratacao: ");
        caixa.setAnoContratacao(Integer.parseInt(this.reader.readLine()));

        System.out.println("Horario de trabalho: ");
        caixa.setHorarioTrabalho(this.reader.readLine());

        System.out.println("Numero do caixa de atuacao: ");
        caixa.setCaixaAtuacao(Integer.parseInt(this.reader.readLine()));

        System.out.println("\n-- DADOS CADASTRADOS --");
        System.out.println("Nome: " + caixa.getNome());
        System.out.println("Idade: " + caixa.getIdade());
        System.out.println("Salario: " + caixa.getSalario());
        System.out.println("Ano contratacao: " + caixa.getAnoContratacao());
        System.out.println("Horario de trabalho: " + caixa.getHorarioTrabalho());
        System.out.println("Numero do caixa de atuacao: " + caixa.getCaixaAtuacao());
    }

}
