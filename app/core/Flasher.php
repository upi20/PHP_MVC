<?php 
class Flasher{
	public static function setFlash($pesan, $ket, $icon, $bg){
		$_SESSION['flash'] = [
			'pesan'	=> $pesan,
			'ket'	=> $ket,
			'icon'	=> $icon,
			'bg'	=> $bg
		];
	}

	public static function flash(){
		if ( isset($_SESSION['flash']) ) {
			echo '
			    <div class="alert alert-' . $_SESSION['flash']['bg'] . ' alert-dismissible fade show m-3" role="alert">
			        <strong><i class="' . $_SESSION['flash']['icon'] . '"></i> ' . $_SESSION['flash']['ket'] . '!</strong> ' . $_SESSION['flash']['pesan'] .'.
			        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			            <span aria-hidden="true">&times;</span>
			        </button>
			    </div>
			';
			unset($_SESSION['flash']);
		}
	}
}
