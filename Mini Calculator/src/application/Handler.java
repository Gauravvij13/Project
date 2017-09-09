package application;
import com.jfoenix.controls.*;
import javafx.event.ActionEvent;

public class Handler {
public	JFXTextField result;
double nu1=0;
boolean start=false;
public String general;
double Ans;

public void number(ActionEvent event)throws Exception
{
	String value =((JFXButton)event.getSource()).getText();
result.setText(result.getText()+value);
}
public void operator(ActionEvent event)throws Exception
{String current=result.getText();
nu1=Double.parseDouble(current);
result.setText("");
start=true;
	general =((JFXButton)event.getSource()).getText();
	switch (general)
	{
	case "CL":
		
		result.setText("");
			break;
		
				default:
		
		
		}}
	public void equal(ActionEvent event)throws Exception
	{	
		double second;
		
	String nu2= result.getText();
		second= Double.parseDouble(nu2);
       if(start==true) {
		switch (general) {
		case "+":
			Ans=nu1+second;
			break;
		case "-":
			Ans=nu1-second;
			break;
	
		case "/":
			Ans=nu1/second;
			break;
	
		case "*":
			Ans=nu1*second;
			break;
		
		default:
	
		}}
		
	String format=String.format(""+Ans);
	result.setText(format);
	
	start=false;
}
public void cross(ActionEvent event)throws Exception
{System.exit(0);
	
}
}
