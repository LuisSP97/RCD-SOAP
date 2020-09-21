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
		if (genero == "M")
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

	public static void main (String[] args) 
	{
		String nombre = nombrePropio("aLAN jACEK","sLaZak","cASTRO","M");
		
		System.out.println(nombre);
	}
}
