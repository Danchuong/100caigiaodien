# Deno — Refero Style

- Refero URL: https://styles.refero.design/style/973dcf14-2237-4346-81af-3d8c811666c2
- Site URL: https://deno.com
- ID: 973dcf14-2237-4346-81af-3d8c811666c2
- Theme: light
- Industry: devtools
- Created: 2026-01-22T10:13:20.000Z
- Ranks: newest: 1290, popular: 348, trending: 578

> Clean Code Canvas — a pristine digital workspace where clarity and functionality are paramount.

## Description

This design system feels like a friendly, yet precise, developer workbench. A light, airy backdrop ensures code snippets and technical diagrams are the primary focus, while a distinctive 'Deno Green' provides a consistent, reassuring visual anchor for key interactions. Subtle border accents and minimal shadows keep elements grounded without adding visual weight, creating a streamlined, information-first experience where clarity is paramount.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Stormy Night | #0a0e1c | neutral | Primary text, prominent headings, key UI elements for strong contrast. |
| Cloud Gray | #cbd1e1 | neutral | Subtle borders, secondary text, inactive states. |
| Deno Green | #70ffaf | brand | CTA backgrounds, active states, key highlights, success indicators. |
| Slate Blue | #a8b2c8 | neutral | Tertiary text, less prominent borders. |
| Ocean Blue | #0077cc | accent | Highlight accents, interactive elements, sometimes used for prominent calls to action. |
| Code Black | #000000 | neutral | Default text, high-contrast UI elements. |
| Frost White | #ffffff | neutral | Page backgrounds, card surfaces. |
| Pale Gray | #e5e7eb | neutral | Subtle borders, background surfaces for interactive elements, hover states. |
| Whisper White | #f8f9fc | neutral | Secondary background surfaces, subtle differentiation from main page background. |
| Success Green | #116329 | semantic | Text for success messages and badges, deep green for conveying positive status. |
| Sky Button Blue | #b3e0ff | accent | Background for secondary buttons, paired with a vibrant blue border for interactive appeal. |
| Highlight Yellow | #ffdb1 | accent | Subtle highlights, occasional accents, adding a touch of vibrancy. |
| Blue Gradient Accent | #cbd1e1 | accent | Decorative background gradients, soft, atmospheric visual interest on specific sections. |
| Green Conic Accent | #70ffaf | accent | Subtle conic gradient, adding a dynamic, contained glow for emphasis. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | system-ui, sans-serif | 400, 700 | 12px, 14px, 16px, 18px, 20px, 27px, 28px, 36px, 44px, 72px | 1.00, 1.10, 1.25, 1.33, 1.43, 1.50, 1.56, 2.00 | Primary sans-serif for body text, navigation, buttons, and most headings; its versatility spans from fine print to prominent display. |
| Menlo | monospace | 400, 650, 700 | 14px, 16px, 20px | 1.40, 1.45, 1.50 | Monospace font for code snippets, badges, and technical output; its fixed width and specific stylistic set ('ss12') ensure clear rendering of code. |
| Recursive | sans-serif | 400 | 16px, 18px | 1.50, 1.56 | Supporting sans-serif for body content and specific informational sections; offers a subtly different character than Inter, used sparingly. |
| Moranga | serif | 400, 700 | 14px, 18px, 44px, 72px | 1.00, 1.10 | Distinctive serif for display-sized headings and certain branded elements; its presence indicates a break from the utilitarian sans-serif, adding a touch of sophisticated weight. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 |  |
| body-sm | 14 | 1.5 |  |
| body | 16 | 1.56 |  |
| subheading | 18 | 1.43 |  |
| heading | 20 | 1.33 |  |
| heading-lg | 28 | 1.25 |  |
| display | 44 | 1.1 | -0.48 |
| display-xl | 72 | 1 | -2.38 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "6px",
    "pills": "9997px",
    "buttons": "6px",
    "general": "6px"
  },
  "elementGap": "8-16px",
  "sectionGap": "48-56px",
  "cardPadding": "16-32px",
  "pageMaxWidth": null
}
```

## Components

### Button Group — Primary, Secondary, GitHub



### Stats Card — Rating, Community, Ecosystem



### Search Input Field



### Primary Call to Action Button

**Role:** Interactive element

Background: Deno Green (#70ffaf). Text: Stormy Night (#0a0e1c), Inter 400. Padding: 12px vertical, 16px horizontal. Border radius: 9997px (pill shape). No border. Used for primary user actions.

### Secondary Ghost Button

**Role:** Interactive element

Background: transparent. Text: Stormy Night (#0a0e1c). Border: 1px solid Cloud Gray (#cbd1e1). Padding: 12px vertical, 16px horizontal. Border radius: 9997px (pill shape). Used for secondary user actions or links.

### Code Snippet Button

**Role:** Interactive element

Background: transparent. Text: Code Black (#000000), Menlo 400. Border: 1px solid Cloud Gray (#cbd1e1). Padding: 0px vertical, 8px horizontal. Border radius: 6px. Used for code actions like 'Copy command'.

### Accent Button (Windows)

**Role:** Interactive element

Background: Sky Button Blue (#b3e0ff). Text: Stormy Night (#0a0e1c). Border: 1px solid #66c2ff with a #66c2ff 2px 4px 0px 0px box-shadow. Padding: 12px vertical, 20px horizontal. Border radius: 8px. Specific to OS selection.

### Navigation Link

**Role:** Primary navigation

Text: Stormy Night (#0a0e1c), Inter 400, 16px. Underline on hover or active (implied by context). No explicit padding/background, simply text with interactive behavior.

### Search Input Field

**Role:** Site utility

Background: transparent. Text: Stormy Night (#0a0e1c). Border: 1px solid Cloud Gray (#cbd1e1). Placeholder: Slate Blue (#a8b2c8). Padding: 12px vertical, 16px horizontal. Border radius: 6px.

### Feature Card

**Role:** Content container

Background: Frost White (#ffffff). Border: 1px solid Pale Gray (#e5e7eb) (implied). Box shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1) 0px 4px 6px -4px. Border radius: 6px. Internal padding varies (e.g. 32px).

### Statistic Badge

**Role:** Information display

Background: transparent. Text: Stormy Night (#0a0e1c) for value, Success Green (#116329) for label. Uses Menlo for numeric values. No radius, no padding.

## Do's

- Use Deno Green (#70ffaf) exclusively for primary calls to action or key indicators to maintain its visual weight.
- Apply all border radii as 6px or 9997px (pill) to maintain the balance between soft and sharp forms.
- Utilize Inter for all primary text elements, adjusting weight and size according to the type scale.
- Employ Menlo (with 'ss12' feature) for all code snippets, technical terms, and data displays for consistent readability.
- Maintain generous section gaps of 48px to 56px to ensure breathable layouts.
- Apply the subtle card shadow (rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1) 0px 4px 6px -4px) only to elements requiring modest elevation.

## Don'ts

- Do not introduce new color hues; strictly adhere to the defined palette of grays, Deno Green, and accent blues.
- Avoid arbitrary use of shadows; elevation is reserved for specific, prominent components like cards.
- Do not modify the letter-spacing of Moranga or Inter outside of the defined negative values for display sizes.
- Do not use transparent backgrounds with non-transparent borders unless it's a 'Ghost Button' variant.
- Avoid using multiple colors on a single textual element (e.g., a heading with different colored words) unless it's a brand element.
- Do not deviate from the 8px base unit for spacing, as this disrupts the visual rhythm.

## Layout

The page adheres to a max-width centered content model within a full-bleed background. The hero section prominently features a bold, left-aligned headline with a custom illustration taking up the right half. Subsequent sections often employ a clean grid structure, featuring 2-column layouts (text on left, content/code on right) or 3-column card grids for features. Vertical rhythm is established through consistent section gaps (48-56px). Some sections incorporate subtle background gradients as visual dividers. The navigation is a sticky top bar with a centered logo, left-aligned primary links, and a search input on the right.

## Imagery

The visual language focuses on custom, whimsical illustrations and clean product screenshots. Illustrations, like the dino character, are flat, line-drawn, and contain brand colors (e.g., Deno Green for highlights, various blues and grays). They serve a decorative and brand-identity role, humanizing complex technical topics. Photography is absent. Screenshots are presented with minimal framing, often on a light background, highlighting code or UI elements directly. Icons are typically filled or outlined in black/gray, maintaining a clear and minimalist aesthetic. The overall density of imagery is balanced, with illustrations occupying significant visual space in key hero sections, while product screenshots are integrated sparingly for explanatory content.

## Elevation

| Element | Style |
| --- | --- |
| Feature Card | rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1) 0px 4px 6px -4px |
| Accent Button (Windows) | rgb(102, 194, 255) 2px 4px 0px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Vercel | Clean, developer-focused aesthetic with prominent illustrations and a clear content hierarchy. |
| Supabase | Light theme, heavy use of custom illustrations to explain technical concepts, and a developer-centric layout. |
| Tailwind Labs | Emphasis on clear typography, intentional spacing, and minimal use of color for a highly functional UI. |
| PlanetScale | Modern developer tool branding with a light background, crisp UI, and subtle use of accent colors. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: Stormy Night (#0a0e1c)
- Background: Frost White (#ffffff)
- CTA Background: Deno Green (#70ffaf)
- Border: Cloud Gray (#cbd1e1)
- Accent: Ocean Blue (#0077cc)

### 3-5 Example Component Prompts
1. Create a primary CTA button: Deno Green background, Stormy Night text (Inter 400, 16px), 9997px border-radius, 12px vertical padding, 16px horizontal padding. Text content: 'Get Started'.
2. Design a feature card: Frost White background, 6px border-radius, box-shadow: `rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1) 0px 4px 6px -4px`. Use a Moranga 700 44px display headline and Inter 400 16px body text.
3. Implement a navigation link: Stormy Night text (Inter 400, 16px). On hover, apply a subtle underline. Text content: 'Docs'.
4. Generate a code snippet display: Menlo 400 14px text color Stormy Night, with 'ss12' font feature settings. Background Pale Gray (#e5e7eb), 6px border-radius, 16px padding. Text content: `console.log("Hello Deno!");`

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923016668-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923016668-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/973dcf14-2237-4346-81af-3d8c811666c2-1777583884082-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/973dcf14-2237-4346-81af-3d8c811666c2-1777583884082-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/973dcf14-2237-4346-81af-3d8c811666c2-1777583884082-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/973dcf14-2237-4346-81af-3d8c811666c2-1777583884082-preview-detail-poster.jpg |
