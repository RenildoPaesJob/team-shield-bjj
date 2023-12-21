import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import TableStudents from '@/Components/TableStudents';

import 'react-toastify/dist/ReactToastify.css';
import NavLinkSimple from '@/Components/NavLinkSimple';

interface User {
	id: number;
	name: string;
	email: string;
	email_verified_at: string;
}
interface StudentProps {
	auth: { user: User; }
	student_name?: string
	students: []
}

export default function StudentIndex({ auth, student_name, students }: StudentProps) {

	// if (student_name) {
	// 	Toast(student_name, 'top-center', 'success')
	// }

	return (
		<AuthenticatedLayout
			user={auth.user}
			header={
				<div className='flex flex-row'>
					<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mr-3 justify-center mt-2">
						Alunos
					</h2>
					<NavLinkSimple
						href={route('student.create')}
						children='Novo'
						className='p-2 bg-cyan-300 rounded-md hover:bg-cyan-300 hover:text-black transition ease-in-out delay-150 duration-300'
					/>
				</div>
			}
		>
			<Head title="Alunos" />

			{/* {student_name ? ToastNotify(`${student_name}`) : ''} */}

			<TableStudents array={students} />

		</AuthenticatedLayout>
	);
}
