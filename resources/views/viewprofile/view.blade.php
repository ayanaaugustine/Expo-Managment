<html>
   
   <head>
      <title>View Student Records</title>
   </head>
   
   <body>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Name</td>
         </tr>
         @isset($users)
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
         </tr>
         @endforeach
         @endisset
      </table>
   </body>
</html>