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
            System.out.println("[1] Cadastrar livro");
            System.out.println("[2] Cadastrar revista");
            System.out.println("[3] Cadastrar mapa");            
            System.out.println("[4] Cadastrar mapa");
            System.out.println("[5] Sair");
            opcao = this.reader.readLine();

            switch (opcao) {
                case "1":
                    this.cadastrarLivro();
                    break;
                case "2":
                    this.cadastrarRevista();
                    break;
                case "3":
                    this.cadastrarMapa();
                case "4":
                    this.cadastrarComputador();
                default:
                    break;
            }

        }

        this.reader.close();
    }


    // cadastrar //

    private void cadastrarItemBiblioteca(ItemBiblioteca i) throws Exception {
        System.out.println("Nome: ");
        i.setNome(this.reader.readLine());

        System.out.println("Emprestavel? (s, n): ");
        Boolean resposta = this.reader.readLine().equals("s");
        i.setEmprestavel(resposta);

        System.out.println("Ano de aquisicao: ");
        i.setAnoDeAquisicao(Integer.parseInt(this.reader.readLine()));
    }

    private void cadastrarLivro() throws Exception {
        System.out.println("\n-- Cadastro de Livro --");
        
        Livro l = new Livro();
        cadastrarItemBiblioteca(l);

        System.out.println("Nome do autor: ");
        l.setAutor(this.reader.readLine());

        System.out.println("Genero do livro: ");
        l.setGenero(this.reader.readLine());

        System.out.println("Quantidade de paginas");
        l.setQtPaginas(Integer.parseInt(this.reader.readLine()));

        this.mostrarLivro(l);
    }

    private void cadastrarRevista() throws Exception {
        System.out.println("\n-- Cadastro de Revista --");

        Revista r = new Revista();
        cadastrarItemBiblioteca(r);

        System.out.println("Editora: ");
        r.setEditora(this.reader.readLine());

        System.out.println("Data de publicacao: ");
        r.setDataPublicacao(this.reader.readLine());

        this.mostrarRevista(r);
    }

    private void cadastrarMapa() throws Exception {
        System.out.println("\n-- Cadastro de Mapa --");

        Mapa m = new Mapa();
        cadastrarItemBiblioteca(m);

        System.out.println("Tipo de mapa: ");
        m.setTipo(this.reader.readLine());
        System.out.println("Regiao: ");
        m.setRegiao(this.reader.readLine());

        this.mostrarMapa(m);
    }

    private void cadastrarComputador() throws Exception {
        System.out.println("\n-- Cadastro de Computador --");

        Computador c = new Computador();
        cadastrarItemBiblioteca(c);

        System.out.println("Placa de video: ");
        c.setPlacaDeVideo(this.reader.readLine());
        System.out.println("Processador: ");
        c.setProcessador(this.reader.readLine());
        System.out.println("Quantidade de Memoria: ");
        c.setMemoria(this.reader.readLine());
        System.out.println("Quantidade de armazenamento: ");
        c.setArmazenamento(this.reader.readLine());

        this.mostrarComputador(c);
    }

    
    // mostrar cadastros //

    private void monstrarItemBiblioteca(ItemBiblioteca i) throws Exception {
        System.out.println("\n -- Dados Cadastrados -- ");
        System.out.println("Nome: " + i.getNome());
        System.out.println("Emprestavel: " + i.isEmprestavel());
        System.out.println("Ano aquisicao: " + i.getAnoDeAquisicao());
    }

    private void mostrarLivro(Livro l) throws Exception {
        this.monstrarItemBiblioteca(l);
        System.out.println("Nome autor: " + l.getAutor());
        System.out.println("Genero: " + l.getGenero());
        System.out.println("Quantidade paginas: " + l.getQtPaginas());
    }
    
    private void mostrarRevista(Revista r) throws Exception {
        this.monstrarItemBiblioteca(r);
        System.out.println("Editora: " + r.getEditora());
        System.out.println("Data publicacao: " + r.getDataPublicacao());
    }

    private void mostrarMapa(Mapa m) throws Exception {
        this.monstrarItemBiblioteca(m);
        System.out.println("Tipo: " + m.getTipo());
        System.out.println("Regiao: " + m.getRegiao());
    }

    private void mostrarComputador(Computador c) throws Exception {
        this.monstrarItemBiblioteca(c);
        System.out.println("Placa de video: " + c.getPlacaDeVideo());
        System.out.println("Processador: " + c.getProcessador());
        System.out.println("Memoria: " + c.getMemoria());
        System.out.println("Armazenamento: " + c.getArmazenamento());
    }

}