<form class="contaact-form" action="store" method="POST">
     @csrf
     <input type="text" name="subject" placeholder="Id"><hr>
     <input type="text" name="name" placeholder="Name"><hr>
     <input type="text" name="mail" placeholder="E-mail"><hr>
     <button type="submit" name="submit">Submit</button>
</form>
