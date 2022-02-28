export interface MetApiResponse<DataType = any> {
  benchmark: number
  status: 'success' | 'failure'
  query: {
    options: Record<string, any>
    params: Record<string, any>
  }
  paginate?: {
    current_page: number
    first_item: number
    last_item: number
    last_page: number
    pages: Array<number>
    per_page: number
    total: number
  }
  data: DataType
}

export interface User {
  readonly id: number
  full_name: string
  email: string
  bio: string
  social_linkedin: string | null
  social_github: string | null
  social_twitter: string | null
  social_facebook: string | null
  social_instagram: string | null
  created_at: string
  updated_at: string
  skills: Skills | null
  services: Services | null
  experiences: Experiences | null
}

export interface Service {
  readonly id: number
  title: string
  description: string
  created_at: string
  updated_at: string
}

export type Services = Service[]

export interface Skill {
  readonly id: number
  title: string
  created_at: string
  updated_at: string
}

export type Skills = Skill[]

export interface Experience {
  readonly id: number
  company: string
  position: string
  description: string
  started_at: string
  created_at: string
  updated_at: string
  stopped_at: string | null
}

export type Experiences = Experience[]
