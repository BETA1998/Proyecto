<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Usuarios;
use Barryvdh\DomPDF\Facade as PDF;
use Dompdf\Dompdf;
use Khill\Lavacharts\Lavacharts;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Usuarios::orderBy('id')-> simplePaginate(5);
        return view('usuarios.index', compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('usuarios.create');
  
    }



    
    public function verPDF()
    {
        

    $usuarios = Usuarios::all(); 
        
    $pdf = PDF::loadView('usuarios.pdf', ['usuarios' => $usuarios]);

    return $pdf->stream();
    }

    
    public function descargarPDF()
    {
        

    $usuarios = Usuarios::all(); 
        
    $pdf = PDF::loadView('usuarios.pdf', ['usuarios' => $usuarios]);

    return $pdf->download('Registro.pdf');
    }


    public function lavacharts()
    {
        $lava = new Lavacharts; // See note below for Laravel

        $reasons = $lava->DataTable();

        $reasons->addStringColumn('Reasons')
        ->addNumberColumn('Percent')
        ->addRow(['Check Reviews', 5])
        ->addRow(['Watch Trailers', 2])
        ->addRow(['See Actors Other Work', 4])
        ->addRow(['Settle Argument', 89]);

        $lava->PieChart('IMDB', $reasons, [
        'title' => 'Titulo de la grafica',
        'is3D' => true
         ]);

         return view('usuarios.estadisticas',compact('lava'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             $this -> validate(request(), [
             'nombre_comp' => ["required","unique:usuarios,nombre_comp"],
             'cedula' => ["required", "max:8", "unique:usuarios,cedula"],
             'fecha_nac' => ["required"],
             'fecha_reg' => ["required"],
             'correo' => ["required","max:50", "unique:usuarios,correo"]
          ]);
        
          $usuario = new Usuarios([
          
          'nombre_comp' => $request->get('nombre_comp'),
          'cedula' => $request->get('cedula'),
          'fecha_nac' => $request->get('fecha_nac'),
          'fecha_reg' => $request->get('fecha_reg'),
          'correo' => $request->get('correo'),
        ]);
        if ($request-> hasFile('avatar')) {
            $usuario->avatar = $request-> file('avatar')-> store('public');
        }
        $usuario->save();
        return redirect('/usuarios');
    }
        
          
          
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $usuario = Usuarios::find($id);
        return view('usuarios.show', compact('usuario'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuarios::find($id);
        return view('usuarios.edit', compact('usuario','id'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuarios::find($id);
        $usuario->nombre_comp = $request->get('nombre_comp');
        $usuario->cedula = $request->get('cedula');
        $usuario->fecha_nac = $request->get('fecha_nac');
        $usuario->fecha_reg = $request->get('fecha_reg');
        $usuario->correo = $request->get('correo');
        if ($request-> hasFile('avatar')) {
        $usuario->avatar = $request-> file('avatar')-> store('public');
        }
        $usuario->save();
        return redirect('/usuarios');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
      
      $usuario = Usuarios::find($id);
      $usuario->delete();
      return redirect('/usuarios');
    }
}