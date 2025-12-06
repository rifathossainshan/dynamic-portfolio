<?php

namespace Tests\Unit;

use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_project()
    {
        $project = Project::create([
            'title' => 'Test Project',
            'description' => 'A test project description',
            'techs' => 'PHP, Laravel, MySQL',
            'github_link' => 'https://github.com/test',
            'live_link' => 'https://example.com',
            'image' => 'test-image.jpg',
        ]);

        $this->assertInstanceOf(Project::class, $project);
        $this->assertEquals('Test Project', $project->title);
        $this->assertEquals('A test project description', $project->description);
    }

    /** @test */
    public function it_has_fillable_attributes()
    {
        $project = new Project();

        $this->assertEquals([
            'title',
            'description',
            'techs',
            'github_link',
            'live_link',
            'image',
        ], $project->getFillable());
    }

    /** @test */
    public function it_can_be_updated()
    {
        $project = Project::create([
            'title' => 'Original Title',
            'description' => 'Original description',
            'techs' => 'PHP',
        ]);

        $project->update([
            'title' => 'Updated Title',
            'description' => 'Updated description',
        ]);

        $this->assertEquals('Updated Title', $project->fresh()->title);
        $this->assertEquals('Updated description', $project->fresh()->description);
    }

    /**
     * Test creating a project with only required fillable attributes.
     */
    /** @test */
    public function it_can_create_project_with_minimal_data()
    {
        $project = Project::create([
            'title' => 'Minimal Project',
            'description' => 'Minimal description',
            'techs' => 'Tech',
        ]);

        $this->assertInstanceOf(Project::class, $project);
        $this->assertEquals('Minimal Project', $project->title);
        $this->assertNull($project->github_link);
        $this->assertNull($project->live_link);
        $this->assertNull($project->image);
    }

    /**
     * Test creating a project with all fillable attributes.
     */
    /** @test */
    public function it_can_create_project_with_all_attributes()
    {
        $data = [
            'title' => 'Full Project',
            'description' => 'Full description',
            'techs' => 'PHP, Laravel',
            'github_link' => 'https://github.com/full',
            'live_link' => 'https://example.com/full',
            'image' => 'full-image.jpg',
        ];

        $project = Project::create($data);

        $this->assertInstanceOf(Project::class, $project);
        foreach ($data as $key => $value) {
            $this->assertEquals($value, $project->$key);
        }
    }

    /**
     * Test that the model uses the correct table name.
     */
    /** @test */
    public function it_has_correct_table_name()
    {
        $project = new Project();
        $this->assertEquals('projects', $project->getTable());
    }

    /**
     * Test that the model uses timestamps.
     */
    /** @test */
    public function it_uses_timestamps()
    {
        $project = new Project();
        $this->assertTrue($project->usesTimestamps());
    }

    /**
     * Test deleting a project.
     */
    /** @test */
    public function it_can_be_deleted()
    {
        $project = Project::create([
            'title' => 'Delete Test',
            'description' => 'To be deleted',
            'techs' => 'Test',
        ]);

        $project->delete();

        $this->assertModelMissing($project);
    }

    /**
     * Test mass assignment of fillable attributes.
     */
    /** @test */
    public function it_can_mass_assign_fillable_attributes()
    {
        $data = [
            'title' => 'Mass Assign',
            'description' => 'Mass assign description',
            'techs' => 'Mass Tech',
            'github_link' => 'https://github.com/mass',
            'live_link' => 'https://example.com/mass',
            'image' => 'mass-image.jpg',
        ];

        $project = Project::create($data);

        $this->assertEquals($data, $project->only(array_keys($data)));
    }

    /**
     * Test that non-fillable attributes are not mass assigned.
     */
    /** @test */
    public function it_does_not_mass_assign_non_fillable_attributes()
    {
        $data = [
            'title' => 'Non Fillable Test',
            'description' => 'Description',
            'techs' => 'Tech',
            'non_fillable' => 'Should not be set',
        ];

        $project = Project::create($data);

        $this->assertFalse(isset($project->non_fillable));
    }

    /**
     * Test finding a project by ID.
     */
    /** @test */
    public function it_can_find_project_by_id()
    {
        $project = Project::create([
            'title' => 'Find Test',
            'description' => 'Find description',
            'techs' => 'Find Tech',
        ]);

        $found = Project::find($project->id);

        $this->assertInstanceOf(Project::class, $found);
        $this->assertEquals($project->id, $found->id);
    }

    /**
     * Test that find returns null for non-existent project.
     */
    /** @test */
    public function it_returns_null_when_project_not_found()
    {
        $found = Project::find(99999);

        $this->assertNull($found);
    }

    /**
     * Test retrieving all projects.
     */
    /** @test */
    public function it_can_retrieve_all_projects()
    {
        Project::create(['title' => 'Project 1', 'description' => 'Desc 1', 'techs' => 'Tech 1']);
        Project::create(['title' => 'Project 2', 'description' => 'Desc 2', 'techs' => 'Tech 2']);

        $projects = Project::all();

        $this->assertCount(2, $projects);
        $this->assertEquals('Project 1', $projects->first()->title);
        $this->assertEquals('Project 2', $projects->last()->title);
    }

    /**
     * Test that the model has the correct primary key.
     */
    /** @test */
    public function it_has_correct_primary_key()
    {
        $project = new Project();
        $this->assertEquals('id', $project->getKeyName());
    }
}
