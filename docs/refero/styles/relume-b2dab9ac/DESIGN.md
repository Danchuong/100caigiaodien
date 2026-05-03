# Relume — Refero Style

- Refero URL: https://styles.refero.design/style/b2dab9ac-9e35-43f5-a8bb-dd9d6702acf0
- Site URL: https://relume.io
- ID: b2dab9ac-9e35-43f5-a8bb-dd9d6702acf0
- Theme: light
- Industry: ai
- Created: 2026-01-21T16:43:31.000Z
- Ranks: newest: 1293, popular: 371, trending: 747

> AI-powered architectural blueprint

## Description

Relume uses a productivity-focused design vocabulary, built on a light, airy canvas with soft, rounded surfaces. Typography is compact and precise, maintaining clarity even at smaller scales. A vibrant purple serves as the primary accent, signaling interactive elements and brand presence against an otherwise subtle neutral palette. Components are lightweight with minimal elevation, emphasizing functionality over heavy visual ornamentation, often featuring a blend of pixel and percentage units for fluid responsiveness.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas | #f1f0ee | neutral | Primary page background, subtly off-white to reduce glare |
| Surface White | #ffffff | neutral | Card backgrounds, elevated UI elements, button fills for inverse states, input fields; Complex background fills and feature highlights, used sparingly for visual impact |
| Charcoal Text | #161616 | neutral | Primary text color for headings and body content, high contrast against light backgrounds |
| Dark Neutral Text | #222222 | neutral | Secondary text and general UI elements requiring good contrast |
| Medium Gray Text | #686868 | neutral | Muted text, helper text, inactive states, and link text that blends into the surrounding content |
| Light Border | #e4e2df | neutral | Subtle borders for cards, images, and other containment elements |
| Primary Purple | #6248ff | brand | Primary button backgrounds, interactive elements, icons, and accent borders. This is the core brand color |
| Muted Purple | #e0daff | accent | Soft accent for ghost buttons or background fills |
| Light Purple Accent | #b8adf5 | accent | Decorative borders or subtle accents |
| System Black | #000000 | neutral | Input borders, decorative SVG fills, and high-contrast icon details |
| Orange to Purple Gradient | #ff7448 | brand | Strategic decorative element, often seen in typographic flourishes or background treatments, representing dynamic energy |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Relative | Inter | 400, 500 | 12px, 13px, 14px, 15px, 16px, 17px, 18px, 20px, 24px, 32px, 40px, 48px, 56px, 224px | 1.00, 1.20, 1.40, 1.43, 1.50 | Primary typeface for all content, from body text to large headlines. Its concise tracking even at display sizes ensures a compact and efficient visual presence. |
| Relative Faux | Inter | 400 | 96px | 1.10 | Used for extremely large, impactful display headings. The specific tracking at this size enhances its visual presence. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.4 |  |
| body-sm | 14 | 1.4 | 0 |
| body | 16 | 1.5 | 0 |
| subheading | 24 | 1.4 | 0 |
| heading | 40 | 1.2 | 0 |
| heading-lg | 56 | 1 | -1.68 |
| display | 96 | 1.1 | -1.92 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "16px",
    "pills": "320px",
    "buttons": "8px",
    "default": "8px"
  },
  "elementGap": "8px",
  "sectionGap": "80px",
  "cardPadding": "16px",
  "pageMaxWidth": "1200px"
}
```

## Components

### AI Generate Input Bar



### Feature Cards — Plan / Structure / Conceptualise



### Prompt to Sitemap — Feature Block



### Primary Filled Button

**Role:** Signaling primary actions and calls to action.

Background: #6248ff (Primary Purple), Text: #ffffff (Surface White), Border: none, Radius: 10px, Padding: 9px vertical, 20px horizontal (with additional 28px left padding for icon/indicator space).

### Secondary Outlined Button

**Role:** Neutral, supportive actions.

Background: #ffffff (Surface White), Text: #161616 (Charcoal Text), Border: 1px solid #161616, Radius: 16px, Padding: 20px all sides.

### Ghost Button

**Role:** Less prominent actions, often within navigation or secondary interaction.

Background: transparent or #e0daff (Muted Purple), Text: #222222 (Dark Neutral Text), Border: 1px solid #222222, Radius: 8px, Padding: 8px vertical, 12px horizontal.

### Feature Card

**Role:** Presenting key features or content blocks.

Background: #ffffff (Surface White), Border: 1px solid #e4e2df (Light Border), Radius: 16px, Padding: 16px all sides. Employs a soft shadow: `rgba(0, 0, 0, 0.08) 0px 8px 10px -4px, rgba(0, 0, 0, 0.05) 0px 2px 10px 2px`

### Input Field

**Role:** User input for forms.

Background: #ffffff (Surface White), Text: #222222 (Dark Neutral Text), Border: 1px solid #000000 (System Black) for focus, default border likely inferred from context, Radius: 0px, Padding: 8px top, 8px left (variable right/bottom).

### Navigation Link

**Role:** Primary navigation items.

Text: #222222 (Dark Neutral Text), No explicit background, Padding: variable from 8px to 12px horizontal.

### Information Badge

**Role:** Small informational tags or labels.

Background: #f1f0ee (Canvas), Text: #161616 (Charcoal Text), Radius: 5px, Padding: 0px vertical, 4px horizontal.

## Do's

- Prioritize Relume's Primary Purple (#6248ff) for all key interactive elements, including primary CTA buttons and critical icons.
- Use Charcoal Text (#161616) as the default for all headings and primary body content, ensuring high readability.
- Apply a consistent 16px border-radius to all card-like surfaces and larger content containers.
- Maintain a clear visual hierarchy using the typography scale, with Relative Faux 96px for display and Relative 56px for primary headlines, employing their specified negative letter-spacing.
- Employ the Canvas (#f1f0ee) for primary page backgrounds, contrasting with Surface White (#ffffff) for card and elevated component backgrounds.
- Use the predefined soft shadow (`rgba(0, 0, 0, 0.08) 0px 8px 10px -4px, rgba(0, 0, 0, 0.05) 0px 2px 10px 2px`) selectively for cards and key components to provide subtle depth.
- Structure page sections with a vertical spacing of 80px for ample breathing room.

## Don'ts

- Avoid introducing new primary colors; limit the palette to the defined brand and neutral tones.
- Do not use sharp 0px corners on interactive elements or cards, as the design uses rounded edges (8px or 16px) consistently.
- Do not vary letter-spacing for body text; apply negative tracking only to large headings and display text as specified.
- Avoid heavy or complex gradients for backgrounds of primary interactive elements; reserve them for decorative elements or specific brand moments.
- Do not use dark gray or black as primary background colors; the system is fundamentally light-themed.
- Do not overload pages with excessive box shadows, as the system relies on subtle elevation for focal elements.
- Avoid using default system fonts; always specify 'Relative' or 'Relative Faux' (with Inter as a substitute) for all text elements.

## Layout

The page model is contained within an implicit maximum width of approximately 1200px, centered on the screen. The hero section is a full-width experience, featuring a prominent centered headline over a dynamic, visually rich background. Subsequent sections follow a consistent rhythm of alternating blocks, often featuring two-column layouts with text and visuals side-by-side (text-left/image-right or vice versa). Feature lists and testimonials are presented in multi-column card grids. Vertical spacing between major sections is generous at 80px, creating a comfortable, uncrowded density. Navigation is a sticky top bar with a 'Start for free' button as the main CTA.

## Imagery

The imagery primarily consists of product screenshots and abstract digital illustrations. Product screenshots are typically tightly cropped and isolated against clean backgrounds, often with soft drop shadows or contained within rounded card components. Illustrations are abstract, geometric, and occasionally feature human figures in an expressive, non-realistic style, typically using a brand-aligned or complementary color palette. Icons are predominantly outlined, featuring a moderate stroke weight, and are monochromatic in the Charcoal Text or System Black color, occasionally with the Primary Purple accent. Imagery serves both decorative atmosphere, product showcase, and explanatory content, occupying significant visual space in alternating text-image sections.

## Elevation

| Element | Style |
| --- | --- |
| Button | rgba(0, 0, 0, 0.08) 0px 1px 3px 0px, rgba(0, 0, 0, 0.04) 0px 1px 2px 0px |
| Card | rgba(0, 0, 0, 0.08) 0px 8px 10px -4px, rgba(0, 0, 0, 0.05) 0px 2px 10px 2px |

## Similar Brands

| Business | Why |
| --- | --- |
| Webflow | Shares a similar clean, slightly playful SaaS aesthetic with a focus on product screenshots and light backgrounds. |
| Framerm | Features a light theme with well-defined cards, geometric illustrations, and a minimal approach to UI elements. |
| Vercel | Employs a clean, high-contrast typography, strategic use of brand-specific accent colors, and component-based organization on a light canvas. |
| Linear | Utilizes a highly structured grid, restrained use of color for functional elements, and an efficient information density on a light background. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- text: #161616
- background: #f1f0ee
- border: #e4e2df
- accent: #6248ff
- primary action: #6248ff (filled action)

Example Component Prompts:
1. Create a Primary Filled Button: background #6248ff, text #ffffff, 9px vertical padding, 20px horizontal padding, 10px border-radius, font Relative weight 400 size 16px. Label 'Get Started'.
2. Create a Feature Card: background #ffffff, border 1px solid #e4e2df, 16px padding, 16px border-radius, apply shadow `rgba(0, 0, 0, 0.08) 0px 8px 10px -4px, rgba(0, 0, 0, 0.05) 0px 2px 10px 2px`. Headline 'Sitemaps' using Relative weight 500 size 24px and body text 'Quickly map out...' in Relative weight 400 size 16px color #686868.
3. Create an Input Field: background #ffffff, 0px border-radius, 8px top padding, 8px left padding, placeholder text in Relative weight 400 size 16px color #686868, active border 1px solid #000000. Placeholder 'Describe a company...'.
4. Create a hero section with a centered headline: 'Websites designed & built faster with AI' in Relative Faux weight 400 size 96px, color #161616, letter-spacing -1.92px. Below it, add body text 'Use AI as your design ally...' in Relative weight 400 size 20px, color #161616 with a line height of 1.4.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777500516721-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777500516721-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/b2dab9ac-9e35-43f5-a8bb-dd9d6702acf0-1777568069038-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/b2dab9ac-9e35-43f5-a8bb-dd9d6702acf0-1777568069038-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/b2dab9ac-9e35-43f5-a8bb-dd9d6702acf0-1777568069038-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/b2dab9ac-9e35-43f5-a8bb-dd9d6702acf0-1777568069038-preview-detail-poster.jpg |
