<div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Masuk </div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"> <a href="#" onClick="$('#loginbox').hide(); $('#forgotbox').show()">
                                           Lupa Password?
                                        </a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
						<?php if(validation_errors()) { ?>
								<div class="alert alert-block">
								  <button type="button" class="close" data-dismiss="alert">×</button>
									<h4>Terjadi Kesalahan!</h4>
									<?php echo validation_errors(); ?>
								</div>
								<?php } ?>
								
								<?php if($this->session->flashdata('result_login')) { ?>
								<div class="alert alert-block">
								  <button type="button" class="close" data-dismiss="alert">×</button>
									<h4>Terjadi Kesalahan!</h4>
									<?php echo $this->session->flashdata('result_login'); ?>
								</div>
								<?php } ?>
                        <?php echo form_open('login/setlog');?>
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username"placeholder="username or email" >                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1" checked="yes"> Biarkan saya 
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <input type="submit" id="btn-login" class="btn btn-success" Value="Masuk"> </input>
                                      <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Belum punya Akun ! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Register
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Pendaftaran Akun Baru</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Masuk</a></div>
                        </div>  
                        <div class="panel-body">
                             <table>
							<?php echo form_open("login/daftar");?>
							<tr>
								<td ><b>Jenis Kelamin </b></td>
								<td><div class="input-group">
								<select name="jenis_kelamin" class="form-control" >
									<option value="Laki-laki"> Laki-laki</option>
									<option value="Perempuan"> Perempuan</option>
								</select>
								</div></td>
							</tr>
							<tr>
								<td ><b>Nama Lengkap</b></td>
								<td><div class="input-group"><input type="text" name="nama"  class="form-control" placeholder="nama lengkap" size="100" required></div></td>
							</tr>
							<tr>
								<td><b>Alamat</b></td>
								<td><div  class="input-group"><input type="text" name="alamat"  class="form-control"  placeholder=" alamat " size="100"required></div></td>
							</tr>
							<tr>
								<td><b>Email </b></td>
								<td><div  class="input-group"><input type="email" name="email" class="form-control" placeholder=" email" size="100"required></div></td>
							</tr>
							<tr>
								<td><b>Username</b></td>
								<td><div  class="input-group"><input type="text" name="username"  class="form-control" placeholder="isikan username"  size="100"required></div></td>
							</tr>
							<tr>
								<td><b>Password </b></td>
								<td><div class="input-group"><input type="password" name="password" class="form-control" placeholder="isikan password" size="100" required></div></td>
							</tr>
							<tr>
							<td><input type="hidden" name="member"  value="3"></td>
							<td><input type="submit" id="btn-login" class="btn btn-success" Value="DAFTAR"> </input></td>
							</tr>
							  </form>
							</table>
                          
                         </div>
                    </div>              
         </div> 
		 <div id="forgotbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Lupa Password?</div>
                        </div>  
                        <div class="panel-body">
                             <?php echo form_open('login/lupaandi');?>
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-email" type="email" class="form-control" name="email"placeholder=" email" required >                                        
                                    </div>
                                </form>
                         </div>
                    </div>              
         </div> 
    </div>
    