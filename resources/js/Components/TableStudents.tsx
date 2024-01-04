import { useState } from "react";
import moment from 'moment';
import { PiEyeFill, PiPencilFill } from "react-icons/pi";
import { FaTrash } from "react-icons/fa";
import NavLinkSimple from "./NavLinkSimple";

interface TableProps {
	array: []
}

export default function TableStudents({ array }: TableProps) {
	const [arr, setArr] = useState<any[]>(array)
	return (
		<div className="py-4">
			<div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
				<div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
					<div className="p-6 text-gray-900 dark:text-gray-100 ">
						{
							arr.length > 0 ?
								<table className="sm:w-auto md:w-full">
									<thead className="bg-gray-600">
										<tr>
											<th className="p-2">Nome</th>
											<th className="p-2">Email</th>
											<th className="p-2">Telefone</th>
											<th className="p-2">Último pagamento</th>
											<th className="p-2">Ações</th>
										</tr>
									</thead>
									<tbody>
										{array.length > 0 &&
											arr.map(item => (
												<tr className="text-center" key={item.id}>
													<td className="p-2">{item.name}</td>
													<td className="p-2">{item.email}</td>
													<td className="p-2">{item.smartphone}</td>
													{/* <td className="p-2">{moment(item.date_birth).format("DD/MM/YYYY")}</td> */}
													<td className="p-2">{item.belt}</td>
													<td className="p-2">
														<NavLinkSimple
															href={route('student.show', {id: item.id})}
															title="Ver Aluno"
															children={<PiEyeFill />}
															className="bg-gray-500 p-3 mx-1 children-center justify-center align-middle rounded-md text-2xl hover:bg-cyan-400 hover:text-black transition ease-in-out delay-150 duration-300"
														/>
														<NavLinkSimple
															children={<PiPencilFill />}
															title="Editar Aluno"
															href={route('student.edit', {id: item.id})}
															className="bg-gray-500 p-3 mx-1 text-center justify-center align-middle rounded-md text-2xl hover:bg-yellow-400 hover:text-black transition ease-in-out delay-150 duration-300"
														/>
														<NavLinkSimple
															children={<FaTrash />}
															title="Deletar Aluno"
															href="#"
															className="bg-gray-500 p-3 mx-1 text-center justify-center align-middle rounded-md text-2xl hover:bg-red-600 hover:text-black transition ease-in-out delay-150 duration-300"
														/>
													</td>
												</tr>
											))
										}
									</tbody>
								</table>
								:
								<h1>Cadastre um novo Aluno!</h1>
						}
					</div>
				</div>
			</div>
		</div>
	);
}