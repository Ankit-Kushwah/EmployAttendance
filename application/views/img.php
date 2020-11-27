<script language="JavaScript">
    Webcam.set({
        width: 490,
        height: 390,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }
</script>


<script> 
document.getElementById('takeSnap').addEventListener('click', function() 
{
if(actionFromServer=="TimeIn")
{

        context.drawImage(video, 0, 0,200, 150);
        $("#webcamVideo").hide();
        $("#canvas").show();
    var canvas = document.getElementById('canvas');
    
    //ctx.drawImage(this, 0, 0);
    dataURL = canvas.toDataURL("image/jpeg");
    //console.log(dataURL) ;
    imageFile=dataURL;
</script>


    
$img = $_POST['image'];
		$folderPath = "assets";
	  
		$image_parts = explode(";base64,", $img);
		$image_type_aux = explode("data:image/", $image_parts[0]);
		$image_type = $image_type_aux[1];
	  
		$image_base64 = base64_decode($image_parts[1]);
		$fileName = uniqid() . '.png';
	  
		$file = $folderPath . $fileName;
		file_put_contents($file, $image_base64);
		
		// print_r($fileName);
	
		$this->Attendance_Model->photo_capture_db_model($file);
	  
	
		}
			public  function photo_capture_db_model($file)
			{


		$id;
		$email = $this->session->userdata('email');
		$query=$this->db->query("select id from empolyees_reg where Email = '$email' ");
		
		foreach($query->result() as $row){
			$id = $row->id;
		}
		

		if( $query=$this->db->query("Insert into emp_attend (image,id,Email) values ('$file','$id','$email')") == 1)
		{
		  $this->load->view('webcam');
					}
		else
		{
			echo "Check Please .....";
		}
	}


	private $imageFolder="assets";
    
			//This function will create a new name for every image captured using the current data and time.
			private function getNameWithPath(){
				$name = $this->imageFolder.date('YmdHis').".jpg";
				return $name;
			}
	public  function photo_capture_model(){
		
			
			//function will get the image data and save it to the provided path with the name and save it to the database
			
				$file = file_put_contents( $this->getNameWithPath(), file_get_contents('php://input') );
				if(!$file){
					return "ERROR: Failed to write data to ".$this->getNameWithPath().", check permissions\n";
				}
				else
				{
					$this->saveImageToDatabase($this->getNameWithPath());         // this line is for saveing image to database
					return $this->getNameWithPath();
				}
				
	}
			
			//function for changing the image to base64
			public function changeImagetoBase64($image){
				$path = $image;
				$type = pathinfo($path, PATHINFO_EXTENSION);
				$data = file_get_contents($path);
				$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
				return $base64;
			}
			
			public function saveImageToDatabase($imageurl){
				$image=$imageurl;
			$image=  $this->changeImagetoBase64($image);          //if you want to go for base64 encode than enable this line
				if($image)
				{
					
				if( $query=$this->db->query("Insert into emp_attend (image) values ('$image')") == 1)
				{           
				$this->load->view('webcam');
				}
				else{
					return "Image not saved to database";
				}
				}
			}


			
			<td><input type="readonly" value="<?php echo $row->Email ?>"></td>
                    <td><input type="readonly" value="<?php echo $row->date ?>"></td>
                    <td><input type="readonly" value="<?php echo $row->time ?>"></td>