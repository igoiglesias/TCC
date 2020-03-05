<!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Upload</h1>
          

          <!-- DataTales Example -->
          <form class="user" enctype="multipart/form-data" method="post" action="dados_controller.php">
                <div class="form-group row">
                  <div class="col-sm-6">
                    <input type="hidden" name="action" value="upload">
                    <input type="file" name="file" class="form-control-file" id="exampleFirstName" placeholder="First Name">
                  </div>
                  <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Enviar
                    </button>
                  </div>
                </div>
                
                <hr>
                
              </form>