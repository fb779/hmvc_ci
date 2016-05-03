<!--div id="content" class="ap_content row text-center" ng-controller="login">
	<form class="" action="{url_login}" name="exampleForm">
		<div class="form-group col-md-12">
			<input id="name" type="text" class="form-control" placeholder="name" ng-model="formData.name" required>
		</div>

		<div class="form-group col-md-12">
			<input id="clave" type	="password" class="form-control" placeholder="Clave" ng-model="formData.pass" required>
		</div>
		
		<div class="col-md-12">
			<input type="submit" class="btn btn-success" ng-click="submitForm(formData)" />
			<input type="submit" class="btn btn-default" ng-click="save()" value="jajajajaja" />
		</div>
	</form-->
<div id="content" class="ap_content row text-center" ng-controller="NewUserController">
<form name="userForm" class="" novalidate>
	<div class="form-group row" ng-class="{ 'has-error': userForm.name.$invalid && userForm.name.$touched }" >
		<div class="input-group col-md-6">
			<span class="input-group-addon"><span class="glyphicon glyphicon-user" ></span></span>
			<input type="text" class="form-control" name="name" ng-model="user.name" placeholder="Username" required>
			<span class="input-group-addon" ng-show="userForm.name.$invalid && userForm.name.$touched"><span class="glyphicon glyphicon-asterisk" ></span></span>
		</div>
	</div>


	<div class="form-group row" ng-class="{ 'has-error': userForm.password.$invalid && userForm.password.$touched }" >
		<div class="input-group col-md-6">
			<span class="input-group-addon"><span class="glyphicon glyphicon-pencil" ></span></span>
			<input type="password" class="form-control" name="password" ng-model="user.password" placeholder="Password" required>
			<span class="input-group-addon" ng-show="userForm.password.$invalid && userForm.password.$touched"><span class="glyphicon glyphicon-asterisk" ></span></span>
		</div>
	</div>
	<button class="btn btn-primary" ng-click="save()">Add User</button>
	
</form>
</div>