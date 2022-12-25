use Auth;
public function logout(Request $request) {
  Auth::logout();
  return redirect('/login');
}