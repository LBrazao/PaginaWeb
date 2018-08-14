var sessionRunning = ""
var s1Flag = 0
var s2Flag = 0
var s3Flag = 0
var overallFlag = 0
var sessionMessage = ""
var redFlagStopTime = ""
runMe = true
function configureSectorFlags()
{
	try
	{
		for(x = 0;x<arrFlags.length;x++)
		{
			var columnArray = arrFlags[x].split('|')
			
			if(x<4) //sector flags
			{
				    		
				switch(x)
				{
					case 0:
						s1Flag = columnArray[1]
						break;
					case 1:	 
						s2Flag = columnArray[1]
						break;
					case 2:
						s3Flag = columnArray[1]
						break;
					case 3:
						overallFlag = columnArray[1]
						
						
						if(parseInt(overallFlag)==2)
						{
							clockStopped = true
							//alert('clock Stopped')
						}
						else
						{
							clockStopped = false
						}
						break; 	 		
				}
			}
			else //Session States
			{	
    			redFlagStopTime = ""
				
    			/*tempColumn = columnArray[1].split("&")
    			
    			     //   alert(columnArray[1])
    			        
        			if(tempColumn.length==1)
        			{
            			columnArray[1] = tempColumn[0]
            			redFlagStopTime = ""
        			}
        			else
        			{
            			columnArray[1] = tempColumn[0]
            			redFlagStopTime  = tempColumn[1]
            			
        			}*/
    			
    			if(columnArray[1].toString().length>2)
    			{
	    			
	    			temp = columnArray[1].split("&")
	    			columnArray[1] = temp[0]
	    			//temp2 = temp[1].split(' ')
	    			redFlagStopTime = temp[1]
	    			
	    				
    			}
    			
				switch(columnArray[1])
				{
					case "WT":
						sessionMessage = "Waiting"
						break;
					case "RN": //Running
						sessionMessage = "Session Running"
						break;
					case "SS": //Session Stopped
						sessionMessage = "Session Stopped"
						tempTime = columnArray[2].split(' ')
						redFlagStopTime  = tempTime[1]
						//divDebug.innerHTML = redFlagStopTime
						break;
					case "CF": //Chequered Flag
						sessionMessage = "Chequered Flag"
						break;
					case "SC": //Safety Car
						sessionMessage = "Safety Car"
						break;
					case "RS": //Race Suspended
						sessionMessage = "Race Suspended"
					 	break;
					case "CS":
						sessionMessage = "Red Flag"
						break; 	
					default:
						sessionMessage = "Session Running"
						break;	
				}
			}
		}
	}
	catch(e)
	{
		alert(e.message + '\n\n'+ e.name)	
	}
}


function convertDate(myInput)
{

		var inputArr = new Array()
		var dateArr = new Array()
		
		inputArr = myInput.split(" ")
		
		if(inputArr.length>0)
		{
			dateArr = inputArr[1].split(":")
			
			//return inputArr[1] + "&nbsp;&nbsp;" + dateArr[2] + "/" + dateArr[1] + "/" + dateArr[0].substring(2)
			return dateArr[0] + ":" + dateArr[1] + ":" + dateArr[2].substring(0,6)
		}
		else
		{
			return inputArr[0]	
		}

		
}

function ConvertMilliToTime(ms,debug) 
{
		var seconds = 0
		var minutes = 0
		var hours = 0
		var tempString2 = ""
		var temp
		var tempArray = new Array()
	
		seconds = (ms/1000)
	
		if(seconds.toFixed(0)>59)
		{
			minutes = seconds /60 	

							
			tempArray = minutes.toString().split(".")
			minutes = tempArray[0]	

			seconds = seconds - (minutes*60)
		}

		if(minutes>59)
		{

			hours = minutes/60
			tempArray = hours.toString().split(".")
			hours = tempArray[0]

							
			minutes = minutes - (hours*60)	
		}
	
		/*if(hours.length==1)
		{
			hours = "0" + parseInt(hours)	
		}*/
		

		if(hours>0)
		{
			if(minutes<9)
			{
				minutes = "0" + parseInt(minutes)
			}
		}

		if(parseInt(minutes)>0)
		{	
				tempArray = seconds.toString().split(".")
				
				if(tempArray.length>1)
				{
	
					if(tempArray[0].length==1)
					{
						temp = tempArray[0] + "." + tempArray[1]
						//seconds = "0" + tempArray[0] + "." + parseFloat(tempArray[1],3)
						seconds = "0" + parseFloat(temp).toFixed(3)						
					}
					else
					{
						temp = tempArray[0] + "." + tempArray[1]
					
						seconds = parseFloat(temp).toFixed(3)
						
					}
				}	
				else
				{
					if(tempArray[0].length==1)
					{
						seconds = "0" + tempArray[0] + ".000"
					}
					else
					{
						seconds = tempArray[0]
					}
				}
		}
	
		if(hours>0)
		{
			//return "a"
	
			return hours + ":" + minutes + ":" + seconds
		}
		else if(minutes>0)
		{
			//return "b"
			tempValue = parseFloat(seconds).toFixed(3)
			
			if(tempValue.length==5)
			{
				tempValue = '0' + tempValue
			}
			return minutes + ":" + tempValue
		}	
		else
		{
			//return "c"
			return seconds.toFixed(3)
		}
}

function ConvertMilliToHours(ms,debug) 
{
	try
	{
		var seconds = 0
		var minutes = 0
		var hours = 0
		var tempString2 = ""
		var temp
		var tempArray = new Array()
	
		seconds = (ms/1000)
	
		if(seconds.toFixed(0)>59)
		{
			minutes = Math.floor(seconds /60)	
			seconds = seconds - (minutes*60)

		}
	
		if(minutes>59)
		{
			hours = Math.floor(minutes/60)
			minutes = minutes - (hours*60)	
		}
			
		if(parseInt(hours)>0)
		{
			if(minutes.toString().length==1)
			{
				minutes = "0" + minutes
			}
		}
		
		if(parseInt(hours)>0)
		{
				if(minutes.toString().length==1)
				{
					minutes = "0" + minutes	
				}
		}

		if(parseInt(hours)>0)
		{
			if(parseInt(seconds).toString().length==1)
			{
				return hours + ":" + minutes + ":0" + parseFloat(seconds).toFixed(0)
			}
			else
			{
				return hours + ":" + minutes + ":" + parseFloat(seconds).toFixed(0)
			}
			
		}
		else if(parseInt(minutes)>0)
		{
			
			if(parseInt(seconds).toString().length==1)
			{
				return minutes + ":0" + parseFloat(seconds).toFixed(0)
			}
			else
			{
				return minutes + ":" + parseFloat(seconds).toFixed(0)
			}			
		}	
		else
		{
			if(parseInt(seconds).toString().length==1)
			{
				return "00:0" + parseFloat(seconds).toFixed(0)
			}
			else
			{
				return "00:" + parseFloat(seconds).toFixed(0)
			}
		}
	}
	catch(e)
	{
		alert('ConvertMilliToHours:\n\n'+e.message + '\n'+e.name)
	}
}

function convertTimetoMill(myTime)
{
	var tempArray = new Array()
	var hrs = 0
	var mins = 0
	var secs = 0
	var returnValue = 0
	
	try
	{
		if(myTime.length>0)
		{
			tempArray = myTime.split(":")
			
			switch(tempArray.length)
			{
				case 1: //seconds e.g. 24.749
					returnValue = parseFloat(tempArray[0]) * 1000
					return parseInt(returnValue)
					break;
				case 2: //minutes + seconds e.g. 12:34.234
					mins = (parseFloat(tempArray[0]) * 60) * 1000
					secs = parseFloat(tempArray[1]) * 1000
					returnValue = parseInt(mins) + parseInt(secs)
					return returnValue
					break;
				case 3:	//hours + minutes + seconds e.g. 23:57:22.888	
					hrs = ((parseFloat(tempArray[0])*60)*60) *1000
					mins = (parseFloat(tempArray[1]) * 60) * 1000
					secs = parseFloat(tempArray[2]) * 1000
					returnValue = parseInt(hrs) + parseInt(mins) + parseInt(secs)
					return returnValue
					break;	
			}
		}
		else
		{
			return "0"	
		}
	}
	catch(e)
	{
		alert('convertTimetoMill:\n\n'+e.name + '\n\n' + e.message)	
	}
}

function restartClock(destinationPage)
{
	clearTimeout(timeOuts)
	currentPage= destinationPage
	startClock()		
}