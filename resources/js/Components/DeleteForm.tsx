import { FormEventHandler, useState } from 'react';
import DangerButton from '@/Components/DangerButton';
import Modal from '@/Components/Modal';
import SecondaryButton from '@/Components/SecondaryButton';
import { useForm } from '@inertiajs/react';
import { FaTrash } from "react-icons/fa";

interface DeleteStudentProps {
	id        : number | string;
	url       : string
	title       : string
	className?: string
}


export default function DeleteForm({ id, className, url, title }: DeleteStudentProps) {
	const [confirmingUserDeletion, setConfirmingUserDeletion] = useState(false);

	const {
		data,
		setData,
		delete: destroy,
		processing,
		reset,
		errors,
	} = useForm();

	const confirmUserDeletion = () => {
		setConfirmingUserDeletion(true);
	};

	const deleteUser: FormEventHandler = e => {
		e.preventDefault();

		destroy(route(url, id));
	};

	const closeModal = () => {
		setConfirmingUserDeletion(false);

		reset();
	};

	return (
		<>
			<SecondaryButton
				onClick={confirmUserDeletion}
				className='bg-gray-500 children-center justify-center align-middle rounded-md text-xl hover:bg-red-400 hover:text-black transition ease-in-out delay-150 duration-300'
			>
				<FaTrash />
			</SecondaryButton>
			<section className={`space-y-6 ${className}`}>
				<Modal show={confirmingUserDeletion} onClose={closeModal}>
					<form onSubmit={deleteUser} className="p-6">
						<h2 className="text-lg font-medium text-gray-900 dark:text-gray-100">
							{title}
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
		</>
	);
}
