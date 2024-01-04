import { useRef, useState, FormEventHandler } from 'react';
import DangerButton from '@/Components/DangerButton';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import Modal from '@/Components/Modal';
import SecondaryButton from '@/Components/SecondaryButton';
import TextInput from '@/Components/TextInput';
import { useForm } from '@inertiajs/react';
import { FaTrash } from "react-icons/fa";

interface DeleteStudentProps {
	id: number | string;
}


export default function DeleteStudentForm({ id }: DeleteStudentProps ,{ className = '' }: { className?: string }) {
	const [confirmingUserDeletion, setConfirmingUserDeletion] = useState(false);
	const passwordInput = useRef<HTMLInputElement>();

	const {
		data,
		setData,
		delete: destroy,
		processing,
		reset,
		errors,
	} = useForm({
		password: '',
	});

	const confirmUserDeletion = () => {
		setConfirmingUserDeletion(true);
	};

const deleteUser: FormEventHandler = (event, idStudent: string | number) => {
		e.preventDefault();

		destroy(route('profile.destroy', idStudent));
	};

	const closeModal = () => {
		setConfirmingUserDeletion(false);

		reset();
	};

	return (
		<section className={`space-y-6 ${className}`}>
			<DangerButton onClick={confirmUserDeletion}><FaTrash /></DangerButton>

			<Modal show={confirmingUserDeletion} onClose={closeModal}>
				<form onSubmit={deleteUser} className="p-6">
					<h2 className="text-lg font-medium text-gray-900 dark:text-gray-100">
						Tem certeza que deseja excluir este aluno?
					</h2>

					<div className="mt-6 flex justify-end">
						<SecondaryButton onClick={closeModal}>Não</SecondaryButton>

						<DangerButton className="ms-3" disabled={processing}>
							Sim
						</DangerButton>
					</div>
				</form>
			</Modal>
		</section>
	);
}
