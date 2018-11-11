<html>
    <head>

  <head>
    <meta charset="utf-8">
    <title>Locatielezen Administrator page</title>
    <link rel="stylesheet" href="normalize.css" charset="utf-8" />
    <link rel="stylesheet" href="admin--test.css" charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

             <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" >
    <link href="{{asset('css/admin.css')}}" rel="stylesheet" type="text/css" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.css" rel="stylesheet" type="text/css" >


  </head>
  <body class="admin">

    <header class="admin__statusbar flex--center">
      <span class="home"><i class="fa fa-home"></i>Home</span>
      <span id="username"><i class="fa fa-user"></i>Tycho Atsma</span>
    </header>

    <nav class="admin__sidepanel">
      <ul>
        <li>
          <i class="fa fa-file-text-o"></i>Create Book
        </li>
        <li>
          <i class="fa fa-pencil-square-o"></i>Modify Book
        </li>
        <li>
          <i class="fa fa-times-circle-o"></i>Delete Book
        </li>
        <li>
          <i class="fa fa-plus-square-o"></i>Add Item
        </li>
      </ul>
    </nav>

    <!--<main class="admin__main">

      <h1>
        Document Title
      </h1>

    </main>
-->

  </body>
</html>
<!-- script -->
<script src="{{asset('js/app.js')}}"></script>
        </body>
        </html>
