package com;

public class funciones {
	public static String nombrePropio(String nombres, String apPaterno, String apMaterno, String genero)
	{
		String resultado = null;
		String mayuscula;
		
		//codigo para nombres
		
		nombres = nombres.toLowerCase();
		
		for(int i=0; i<nombres.length();i++)
		{
			if(i==0 )
			{
				mayuscula = String.valueOf(nombres.charAt(i));
				mayuscula = mayuscula.toUpperCase();
				
				nombres = nombres.replaceFirst(String.valueOf(nombres.charAt(i)), mayuscula);
				
				
			}
			else if (nombres.charAt(i-1) ==' ')
			{
				mayuscula = String.valueOf(nombres.charAt(i));
				mayuscula = mayuscula.toUpperCase();
				
				nombres = nombres.replaceFirst(String.valueOf(nombres.charAt(i)), mayuscula);
				
		
			}
		
		}
		
		//codigo para apellidos
		
		apPaterno = apPaterno.toLowerCase();
		apMaterno = apMaterno.toLowerCase();
		
		mayuscula = String.valueOf(apPaterno.charAt(0));
		mayuscula = mayuscula.toUpperCase();
		apPaterno = apPaterno.replaceFirst(String.valueOf(apPaterno.charAt(0)), mayuscula);
		
		mayuscula = String.valueOf(apMaterno.charAt(0));
		mayuscula = mayuscula.toUpperCase();
		apMaterno = apMaterno.replaceFirst(String.valueOf(apMaterno.charAt(0)), mayuscula);
		
		//creacion del saludo
		if (genero.equals("M"))
		{
			resultado="Sr. ";
		}
		else
		{
			resultado="Sra. ";
		}
		
		resultado+=nombres;
		resultado+=" ";
		resultado+=apPaterno;
		resultado+=" ";
		resultado+=apMaterno;
		
		
		
		return resultado;
	}
	
	
	
	String rut;
	public String getrut() {
		return rut;
	}
	
	public void setRut(String rut) {
		this.rut = rut;
	}
	
	
	public static boolean validarRut(String rut) {

		boolean validacion = false;
		try {
			
			rut =  rut.toUpperCase();
			rut = rut.replace(".", "");
			rut = rut.replace("-", "");
			int rutAux = Integer.parseInt(rut.substring(0, rut.length() - 1));

			char dv = rut.charAt(rut.length() - 1);

			int m = 0, s = 1;
			for (; rutAux != 0; rutAux /= 10) {
				s = (s + rutAux % 10 * (9 - m++ % 6)) % 11;
			}
			if (dv == (char) (s != 0 ? s + 47 : 75)) {
				validacion = true;
			}

		} 
		catch (java.lang.NumberFormatException e) {
		}
		catch (Exception e) {
		}
		return validacion;
		}

	public static void main (String[] args) 
	{
		String nombre = nombrePropio("aLAN jACEK","sLaZak","cASTRO","M");
		System.out.println(nombre);
		System.out.print(validarRut("19.748.419-5"));
		
		
	}
}
