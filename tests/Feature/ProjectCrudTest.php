<?php

namespace Tests\Feature;

use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjectCrudTest extends TestCase
{
    use RefreshDatabase;

    protected $user;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
    }

    /** @test */
    public function authenticated_user_can_view_projects_index()
    {
        $this->actingAs($this->user);

        Project::create([
            'title' => 'Test Project',
            'description' => 'Test description',
            'techs' => 'PHP, Laravel',
        ]);

        $response = $this->get(route('admin.projects.index'));

        $response->assertStatus(200);
        $response->assertSee('Test Project');
    }

    /** @test */
    public function authenticated_user_can_create_project()
    {
        $this->actingAs($this->user);

        $projectData = [
            'title' => 'New Project',
            'description' => 'New project description',
            'techs' => 'PHP, Laravel, MySQL',
            'github_link' => 'https://github.com/test',
            'live_link' => 'https://example.com',
        ];

        $response = $this->post(route('admin.projects.store'), $projectData);

        $response->assertRedirect(route('admin.projects.index'));
        $this->assertDatabaseHas('projects', ['title' => 'New Project']);
    }

    /** @test */
    public function authenticated_user_can_update_project()
    {
        $this->actingAs($this->user);

        $project = Project::create([
            'title' => 'Original Title',
            'description' => 'Original description',
            'techs' => 'PHP',
        ]);

        $updateData = [
            'title' => 'Updated Title',
            'description' => 'Updated description',
            'techs' => 'PHP, Laravel',
        ];

        $response = $this->put(route('admin.projects.update', $project), $updateData);

        $response->assertRedirect(route('admin.projects.index'));
        $this->assertDatabaseHas('projects', ['title' => 'Updated Title']);
    }

    /** @test */
    public function authenticated_user_can_delete_project()
    {
        $this->actingAs($this->user);

        $project = Project::create([
            'title' => 'Project to Delete',
            'description' => 'Will be deleted',
            'techs' => 'PHP',
        ]);

        $response = $this->delete(route('admin.projects.destroy', $project));

        $response->assertRedirect(route('admin.projects.index'));
        $this->assertDatabaseMissing('projects', ['id' => $project->id]);
    }

    /** @test */
    public function unauthenticated_user_cannot_access_admin_projects()
    {
        $response = $this->get(route('admin.projects.index'));

        $response->assertRedirect(route('login'));
    }
}
