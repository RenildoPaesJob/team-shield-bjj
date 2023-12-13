import { ToastContainer, TypeOptions, toast } from "react-toastify";

interface ToastProps {
	stundent      : string
	position_view : 'top-right'|'top-center'|'top-left'|'bottom-right'|'bottom-center'|'bottom-left'|'top-right'
	type         ?: 'success'|'warning'|'error';
}

export function ToastNotify ({stundent, position_view, type}: ToastProps) {

	toast(`${stundent} cadastrado com sucesso!`, {
		position       : position_view,
		autoClose      : 3000,
		hideProgressBar: false,
		closeOnClick   : true,
		pauseOnHover   : true,
		draggable      : true,
		progress       : undefined,
		theme          : "colored",
		type           : type
	});

	return (
		<ToastContainer
			position={position_view}
			autoClose={3000}
			hideProgressBar={false}
			newestOnTop={false}
			closeOnClick
			rtl={false}
			pauseOnFocusLoss
			draggable
			pauseOnHover
			theme="colored"
		/>
	)
}
