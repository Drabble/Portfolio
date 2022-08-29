<!DOCTYPE HTML>
<html>
<head>
	<?php include("include/include.php"); ?>
    
	<title>Liri Carroserie</title>
     
</head>
<body>
	<div class="content">
		<?php include("include/header.php"); ?>
		
		<!-- Info -->
		<div class="bloc">
			<div class="info">
				<center><h1>Devis</h1></center><br/>
				<i>* Délai de réponse : 24 heures</i><br/><br/>
				<div class="form">
					<form>
						
						<label for="car">Select car</label>
						<select id="car" class="form-control">
							<option>Ford Fiesta 1999</option>
							<option>Ford Mustang 2015</option>
						</select>
						<br/><br/>
						
						<label for="inlineRadio1">Type</label><br/>
						<label class="radio-inline">
						  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Peinture complète
						</label>
						<label class="radio-inline">
						  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Pièces
						</label><br/><br/>
						
						<table>
							<tr>
								<td style="padding: 10px;">
									<label for="front">Avant</label><br/>
									<table>
										<tr>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox1" value="option1"> Parechoc  </td>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox2" value="option2"> Phares  </td>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox3" value="option3"> Capot  </td>	
										</tr>
										<tr>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox1" value="option1"> Parechoc  </td>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox2" value="option2"> Phares  </td>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox3" value="option3"> Capot  </td>	
										</tr>  
										<tr>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox1" value="option1"> Parechoc  </td>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox2" value="option2"> Phares  </td>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox3" value="option3"> Capot  </td>	
										</tr>  
									</table>
								</td>
								<td style="padding: 10px;">
									<label for="front">Arrière</label><br/>
									<table>
										<tr>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox1" value="option1"> Parechoc  </td>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox2" value="option2"> Phares  </td>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox3" value="option3"> Capot  </td>	
										</tr>
										<tr>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox1" value="option1"> Parechoc  </td>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox2" value="option2"> Phares  </td>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox3" value="option3"> Capot  </td>	
										</tr>  
										<tr>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox1" value="option1"> Parechoc  </td>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox2" value="option2"> Phares  </td>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox3" value="option3"> Capot  </td>	
										</tr>  
									</table>
								</td>
							</tr>
							<tr>
								<td style="padding: 10px;">
									<label for="front">Côté gauche</label><br/>
									<table>
										<tr>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox1" value="option1"> Parechoc  </td>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox2" value="option2"> Phares  </td>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox3" value="option3"> Capot  </td>	
										</tr>
										<tr>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox1" value="option1"> Parechoc  </td>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox2" value="option2"> Phares  </td>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox3" value="option3"> Capot  </td>	
										</tr>  
										<tr>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox1" value="option1"> Parechoc  </td>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox2" value="option2"> Phares  </td>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox3" value="option3"> Capot  </td>	
										</tr>  
									</table>
								</td>
								<td style="padding: 10px;">
									<label for="front">Côté droite</label><br/>
									<table>
										<tr>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox1" value="option1"> Parechoc  </td>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox2" value="option2"> Phares  </td>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox3" value="option3"> Capot  </td>	
										</tr>
										<tr>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox1" value="option1"> Parechoc  </td>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox2" value="option2"> Phares  </td>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox3" value="option3"> Capot  </td>	
										</tr>  
										<tr>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox1" value="option1"> Parechoc  </td>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox2" value="option2"> Phares  </td>
											<td style="padding: 5px;"><input type="checkbox" id="inlineCheckbox3" value="option3"> Capot  </td>	
										</tr>  
									</table>
								</td>
							</tr>
						</table>
						<br/>
						<label for="textArea">Informations supplémentaire</label><br/>
						<textarea id="textArea placeholder="Description" class="form-control" rows="3"></textarea><br/>
						<label for="exampleInputFile">Images</label><br/>
						<input type="file" id="exampleInputFile"><br/>
						<button type="submit" class="btn btn-primary btn-lg">Envoyer</button><br/>
					</form>
				</div>
			</div>
		</div>
		
		<?php include("include/pub.php"); ?>
	</div>
</body>
</html>