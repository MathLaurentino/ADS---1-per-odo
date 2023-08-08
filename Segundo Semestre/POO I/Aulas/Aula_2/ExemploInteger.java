public class ExemploInteger {
	public static void main(String[] args) {
	
		String s1 = "10";
		
		//converte string para int
		int i1 = Integer.parseInt(s1);
		System.out.println(i1);
		
		//converte de int para string
		Integer i2 = 2;
		s1 = i2.toString();
		
		
		//converte de int para float
		float f1 = i2.floatValue();
		System.out.println(f1);
    }
}
