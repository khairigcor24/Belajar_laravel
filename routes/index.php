public function index()
{
    /* Cara 1 */
    $data ['username'] = 'Heroku';
    $data ['last_login'] = date('Y-m-d H:i:s');
    $data ['list_pendidikan'] = ['SD', 'SMP', 'SMA', 'S1', 'S2', 'S3'];
    return view('home', $data );

    /* atau Cara 2 */
    $data = [
        'username'        => 'Heroku',
        'last_login'      => date('Y-m-d H:i:s'),
        'list_pendidikan' => ['SD', 'SMP', 'SMA', 'S1', 'S2', 'S3']
    ];
    return view('home', $data);

    /* atau Cara 3 */
    $username = 'Heroku';
    $last_login = date('Y-m-d H:i:s');
    $list_pendidikan = ['SD', 'SMP', 'SMA', 'S1', 'S2', 'S3'];
    return view('home', compact('username', 'last_login', 'list_pendidikan'));
}
