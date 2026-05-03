# Brisbane Web Developer — Refero Style

- Refero URL: https://styles.refero.design/style/23d83a89-8f22-405a-aa33-74fd0ebde9d8
- Site URL: https://carlbeaverson.com
- ID: 23d83a89-8f22-405a-aa33-74fd0ebde9d8
- Theme: light
- Industry: agency
- Created: 2026-03-10T12:53:45.000Z
- Ranks: newest: 1065, popular: 571, trending: 729

> Art Gallery Minimalism: Project thumbnails, like curated art pieces, float on a light, matte background, each framed by a subtle, soft shadow box.

## Description

This design system evokes the ambiance of a high-end art gallery, where precise visual arrangement and subtle material textures give objects a curated weight. A minimalist palette of near-white, light gray, and charcoal provides a neutral stage, making the content—especially project thumbnails framed by soft shadows—the primary visual event. The extensive use of achromatic tones ensures a calm, contemplative experience, subtly emphasizing the work itself rather than decorative flair. Sparse, intentional typography with a high degree of contrast feels both academic and accessible.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #f4f3f1 | neutral | Page backgrounds, card surfaces, form input fields, buttons. |
| Graphite Text | #333333 | neutral | Primary body text, headings, input text, and high-contrast elements. |
| Ash Details | #aaaaaa | neutral | Secondary text, link text, borders for inactive elements, and subtle dividers. |
| Stone Gray | #4d4d4d | neutral | Informational body text, lower contrast textual elements. |
| Dust Border | #dddddd | neutral | Subtle borders and input field outlines. |
| Inactive Slate | #666666 | neutral | Color for inactive or secondary button text. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| sans-serif | system-ui, 'Helvetica Neue', 'Segoe UI', Arial, sans-serif | 400 | 14px, 15px, 20px | 1.20, 1.40, 1.50 | Default text for body copy, navigational links, button labels, and input fields. Sizes 14px and 15px handle most informational content, with 20px reserved for more prominent informational statements. |
| Suisse Works Trial | serif | 400 | 13px | 1.50 | This custom font, though small at 13px, is used for specific textual details, its negative letter-spacing (-0.0380em) hinting at a refined, almost condensed aesthetic that creates subtle visual tension against the regular sans-serif. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.5 | -0.49 |
| body | 15 | 1.4 |  |
| heading-sm | 20 | 1.2 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "5px",
    "inputs": "5px",
    "buttons": "5px"
  },
  "elementGap": "10px",
  "sectionGap": "122px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Project Thumbnail Card



### Hero Bio Text Block



### Newsletter Segmented Form



### Primary Button

**Role:** Call-to-action buttons for submissions.

Background: Canvas White (#f4f3f1). Text: Graphite Text (#333333). Border Top: Dust Border (#eeeded). Padding: 20px vertical, 30px horizontal. Right border radius: 5px, others 0px. Font: sans-serif 400, 15px, 1.4 lineHeight.

### Secondary Button

**Role:** General interactive buttons.

Background: Canvas White (#f4f3f1). Text: Inactive Slate (#666666). Border Top: Dust Border (#eeeded). Padding: 15px vertical, 40px horizontal. Border radius: 5px. Font: sans-serif 400, 15px, 1.4 lineHeight.

### Text Input

**Role:** Standard user input fields.

Background: Canvas White (#f4f3f1). Text: Graphite Text (#333333). Border Top: Dust Border (#eeeded). Padding: 20px. Border radius: 5px. Font: sans-serif 400, 15px, 1.4 lineHeight.

### Segmented Input Left

**Role:** Input field designed to be part of a group, appearing on the left.

Background: Canvas White (#f4f3f1). Text: Graphite Text (#333333). Border Top: Dust Border (#eeeded). Padding: 20px. Left border radius: 5px, others 0px. Font: sans-serif 400, 15px, 1.4 lineHeight.

### Project Thumbnail Card

**Role:** Displays project previews.

A container with background Canvas White (#f4f3f1) and a pronounced, soft shadow: rgba(90, 50, 40, 0.15) 0px 5px 15px 0px, rgba(80, 40, 30, 0.1) 0px 4px 8px 0px. Border radius: 5px.

## Do's

- Use Canvas White (#f4f3f1) as the primary background for all major content sections and interactive elements.
- Apply Graphite Text (#333333) for all primary body text, headings, and high-contrast UI labels.
- Frame significant visual content, like project cards, with the soft elevation shadow: rgba(90, 50, 40, 0.15) 0px 5px 15px 0px, rgba(80, 40, 30, 0.1) 0px 4px 8px 0px.
- Maintain a clear vertical rhythm between sections using a 122px gap (`sectionGap`).
- Employ a uniform 5px border radius (`radius.inputs`, `radius.buttons`, `radius.cards`) for all rounded elements.
- Utilize Ash Details (#aaaaaa) for all auxiliary textual elements, links, and borders on non-primary UI elements.

## Don'ts

- Avoid using highly saturated or chromatic colors; adhere strictly to the achromatic palette.
- Do not introduce sharp corners or larger radii than 5px for any interactive or card-like elements.
- Do not vary line heights for `sans-serif` from the specified 1.2, 1.4, or 1.5, or for `Suisse Works Trial` from 1.5.
- Do not deviate from the specified letter-spacing for `Suisse Works Trial`; its tightly spaced appearance is a signature element.
- Do not use complex gradient fills or patterned backgrounds; surfaces should remain uniformly Canvas White (#f4f3f1) or Dust Border (#dddddd).

## Layout

The page adheres to a max-width contained model, centered on the screen, creating a formal, academic presentation space. The hero section is a simple, centered text block with ample negative space. Content sections are primarily a grid of project cards, arranged in a visually consistent 3-column layout, maintaining generous horizontal and vertical spacing. The rhythm is established by section gaps of 122px, separating distinct content blocks vertically. The overall density is spacious, emphasizing individual content elements. Navigation is a minimal top-right link cluster, reinforcing the content-first approach.

## Imagery

This design primarily relies on product screenshots and illustrative web interfaces within project cards, contained and presented as distinct objects. The 'project thumbnail' treatment is crucial: these are not full-bleed images, but smaller, contained visuals framed by Card White (#f4f3f1) and lifted by a soft, brown-tinted shadow. This makes each project feel like a displayed artifact. Photography, when used, is integrated within these 'project cards' and visually consistent with digital output, often focused on UI elements or abstract textures. The role of imagery is strictly to showcase work, not to add decorative flourish or lifestyle context. Icons, where present, are minimal line-art, fitting the achromatic theme.

## Elevation

| Element | Style |
| --- | --- |
| Project Thumbnail Card | rgba(90, 50, 40, 0.15) 0px 5px 15px 0px, rgba(80, 40, 30, 0.1) 0px 4px 8px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Awwwards-featured portfolio sites | Shares the focus on presenting work as distinct, elevated objects against a minimal background, often using similar soft shadows and restrained palettes. |
| Certain architecture portfolio sites | Employs a grid-based, spacious layout with a strong emphasis on showcasing individual projects as hero elements, often with controlled lighting (shadows). |
| High-end product display pages | Similar achromatic background and subtle elevation used to highlight the 'product' (in this case, web projects) as the central visual focus. |
| Minimalist editorial platforms | Relies heavily on well-structured typography with significant white space and a limited, high-contrast color palette to convey information. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: #333333 (Graphite Text)
- Background: #f4f3f1 (Canvas White)
- Accent/Links: #aaaaaa (Ash Details)
- Input Borders: #dddddd (Dust Border)
- Button Background: #f4f3f1 (Canvas White)

### 3-5 Example Component Prompts
1. Create a `Project Thumbnail Card`: Use `Canvas White` (#f4f3f1) background, apply the shadow `rgba(90, 50, 40, 0.15) 0px 5px 15px 0px, rgba(80, 40, 30, 0.1) 0px 4px 8px 0px`, and set `5px` border radius everywhere. Inside, place a digital product screenshot.
2. Design a `Primary Button` for submission: Background `Canvas White` (#f4f3f1), text `Graphite Text` (#333333), `20px` vertical padding, `30px` horizontal padding. Apply `5px` border radius only to the right side, `0px` to others. Font: `sans-serif 400`, `15px`, `lineHeight 1.4`.
3. Implement a `Text Input` field: Background `Canvas White` (#f4f3f1), text `Graphite Text` (#333333), border `1px solid Dust Border` (#dddddd). Padding: `20px` all around. Border radius: `5px`. Font: `sans-serif 400`, `15px`, `lineHeight 1.4`.
4. Create a `Body Text Block`: Use `Stone Gray` (#4d4d4d) for the primary text color. Font `sans-serif 400`, `15px`, `lineHeight 1.4`. Ensure `122px` vertical spacing to the next section.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925627735-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925627735-thumb.jpg |
