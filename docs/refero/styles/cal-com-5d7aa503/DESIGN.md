# Cal.com — Refero Style

- Refero URL: https://styles.refero.design/style/5d7aa503-8cfa-49a4-bd3b-0c2f0f075c70
- Site URL: https://cal.com
- ID: 5d7aa503-8cfa-49a4-bd3b-0c2f0f075c70
- Theme: light
- Industry: productivity
- Created: 2026-03-03T11:40:47.000Z
- Ranks: newest: 1102, popular: 121, trending: 143

> Monochrome Utility, Human Touch. A system that prioritizes clarity and function with a stark black-and-white palette, but softens it with friendly typography and rounded forms.

## Description

The design feels like a pragmatic, high-precision instrument. It's built on a strict and disciplined monochrome palette of black, white, and echelon grays, where color is intentionally excluded from the core UI to emphasize function. The custom font, 'Cal Sans', defines the visual identity with its geometric yet open letterforms, giving headlines a technical but approachable character. Nearly all interactive elements are either solid black or pill-shaped outlines, creating a binary system of action. Cards are the fundamental building block, using soft 8-12px radii and extremely subtle shadows to create a quiet, layered topology on a light gray background.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Ink | #101010 | brand | Primary CTAs, primary text, active states. Used as the strongest dark tone, providing maximum contrast and visual weight for key actions. |
| Action Blue | #0099ff | accent | Tertiary links, informational banner text. A rare, functional splash of color reserved for secondary calls to action and informational highlights. |
| White | #ffffff | neutral | Card backgrounds, text on dark buttons. |
| Paper | #f4f4f4 | neutral | Main page background. |
| Graphite | #242424 | neutral | Headlines, primary body text. |
| Slate | #6b7280 | neutral | Secondary text, descriptive copy, disabled states. |
| Stone | #898989 | neutral | Placeholder text, decorative UI elements. |
| Silver | #e5e7eb | neutral | Borders, dividers, subtle backgrounds. |
| Info Banner BG | #eff6fe | neutral | Background for the top-of-page informational banner. |
| Google Blue | #4285f4 | accent | Integration logos only. |
| Google Yellow | #fbbc04 | accent | Integration logos only. |
| Google Green | #34a853 | accent | Integration logos only. |
| Google Red | #ea4335 | accent | Integration logos only. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Cal Sans | Poppins, Gilroy | 600 | 20px, 24px, 48px, 64px | 1.10 - 1.30 | Primary headline font. Its geometric forms and slightly wide stance give the brand a unique, technical-yet-friendly voice. Used exclusively for headings to establish hierarchy. |
| Cal Sans UI Variable Light | Inter Light | 300 | 14px, 16px, 18px | 1.40 - 1.50 | Primary body and UI text font. The light weight and tight negative tracking create a clean, modern text block that is readable without being loud. |
| Inter | system-ui, -apple-system, sans-serif | 400, 500, 600 | 10px, 12px, 14px, 16px | 1.14 - 1.43 | Secondary UI and body font. Used for smaller text, labels, and inside complex components like the calendar widget where utmost clarity is required. |
| Matter | Inter | 400 | 10px, 12px, 14px | 1.14 - 1.50 | Tertiary UI text for captions and metadata where a highly legible, neutral choice is needed. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.4 | -0.24 |
| body-sm | 14 | 1.5 | -0.2 |
| body | 16 | 1.5 | -0.19 |
| subheading | 18 | 1.4 | -0.2 |
| heading-sm | 20 | 1.3 | 0.2 |
| heading | 24 | 1.3 | 0.24 |
| heading-lg | 48 | 1.1 | 0.48 |
| display | 64 | 1.1 | 0.64 |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "9999px",
    "cards": "12px",
    "inputs": "8px",
    "buttons": "9999px (pills), 8px (rectangular)"
  },
  "elementGap": "",
  "sectionGap": "96px",
  "cardPadding": "24px",
  "pageMaxWidth": "1200px"
}
```

## Components

### Compliance Info Banner



### How It Works — Feature Cards



### Testimonial Card



### Primary CTA Button

**Role:** The main call-to-action on the page.

A pill-shaped button. Background: Ink (#101010). Text: White (#ffffff). Font: Cal Sans UI at 14-16px. Radius: 9999px. Padding: ~12px 24px.

### Secondary Ghost Button

**Role:** A secondary call-to-action, often next to the primary.

A pill-shaped outline button. Background: transparent or Paper (#f4f4f4). Text: Graphite (#242424). Border: 1px solid Silver (#e5e7eb). Radius: 9999px. Padding: ~12px 24px.

### Header CTA Button

**Role:** The main call-to-action in the sticky header.

A rectangular button. Background: Ink (#101010). Text: White (#ffffff). Font: Cal Sans UI at 14px. Radius: 8px. Padding: ~8px 16px.

### Tag Button

**Role:** Small, non-critical buttons for categorizing or filtering content.

A small pill button. Background: Paper (#f4f4f4) or Silver (#e5e7eb). Text: Graphite (#242424). Radius: 9999px. Padding: ~4px 12px.

### Scheduling Widget Card

**Role:** The hero component showcasing the product's core functionality.

Background: White (#ffffff). Padding: 16px. Radius: 12px. Shadow: `rgba(36, 36, 36, 0.05) 0px 4px 8px 0px`. Contains an interactive calendar UI.

### Navigation Link

**Role:** Links in the main site header.

Text-only link. Color: Graphite (#242424). Font: Cal Sans UI at 14-16px. No underline.

## Do's

- Use 'Cal Sans' weight 600 exclusively for headings (size 20px and above).
- Employ a strict monochrome palette (Ink, Graphite, Slate, Paper, White) for 99% of the UI.
- Use pill-shaped buttons (9999px radius) for all primary and secondary page CTAs.
- Apply a 12px border radius to all content cards and large containers.
- Use subtle, diffuse shadows (`rgba(36, 36, 36, 0.05) 0px 4px 8px 0px`) for elevation.
- Set body copy in 'Cal Sans UI Variable Light' with tight negative letter-spacing.
- Reserve the single 'Action Blue' (#0099ff) for secondary links or informational highlights.

## Don'ts

- Do not introduce any new colors to the core UI; confine color to logos and the single blue accent.
- Do not use sharp corners on buttons or cards.
- Do not use font weights heavier than 600.
- Do not use traditional outlined buttons; use either solid 'Ink' or 'ghost' pill buttons.
- Do not use gradients on any buttons or card backgrounds.
- Do not use borders on cards; use shadows for separation.
- Do not set body text in 'Cal Sans'; it is for headlines only.

## Layout

The site uses a centered layout within a max-width of 1200px, creating generous breathing room on either side. Sections are clearly demarcated by 96px of vertical space, establishing a calm, deliberate rhythm. The hero combines a large headline stack with a prominent product UI visual. Content below follows a predictable pattern of centered headlines followed by 3-column feature card grids or alternating text-and-visual blocks. This simple, highly structured approach emphasizes clarity and ease of navigation.

## Imagery

The visual language is entirely product-centric and informational. Imagery consists solely of clean, isolated product UI screenshots and the logos of integration partners. There is no lifestyle photography, illustration, or abstract graphics. This choice reinforces the brand's focus on its functional capabilities, letting the product itself be the hero. All visual elements are presented within contained cards, never full-bleed, maintaining the page's orderly, grid-based structure.

## Elevation

| Element | Style |
| --- | --- |
| Feature Card, Scheduling Widget | rgba(36, 36, 36, 0.05) 0px 4px 8px 0px |
| Hover/Focus Card | rgba(36, 36, 36, 0.7) 0px 1px 5px -4px, rgba(36, 36, 36, 0.05) 0px 4px 8px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Calendly | Direct competitor with a similar clean, utility-focused scheduling UI, but uses more color. |
| Linear | Shares the disciplined monochrome palette, precision typography, and subtle shadows. |
| Vercel | Similar use of a geometric sans-serif for headlines (Geist) against a stark black-and-white UI. |
| Pitch | Employs a custom slab-serif for identity and relies on a clean, card-based layout with a primarily B&W palette. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- **Page Background:** `#f4f4f4` (Paper)
- **Card Background:** `#ffffff` (White)
- **Headline Text:** `#242424` (Graphite)
- **Body Text:** `#242424` (Graphite)
- **Primary CTA:** `#101010` (Ink) background, `#ffffff` (White) text
- **Borders/Dividers:** `#e5e7eb` (Silver)

### Example Component Prompts
1.  **Hero Section:** "Create a hero section with a `#f4f4f4` background. On the left, add a headline 'The better way to schedule' using 'Cal Sans' at 64px, weight 600, color `#242424`, and line-height 1.1. Below it, add body text using 'Cal Sans UI' at 18px, color `#6b7280'. On the right, place a large card with a white background, 12px radius, and a subtle shadow `rgba(36, 36, 36, 0.05) 0px 4px 8px 0px` to represent a scheduling widget."
2.  **Primary CTA Button:** "Create a button with the text 'Get started'. Make it pill-shaped with a `9999px` radius. Use a `#101010` background color and `#ffffff` text color. The font should be 'Cal Sans UI' at 16px. Use padding of 12px top/bottom and 24px left/right."
3.  **Feature Card:** "Create a feature card with a `#ffffff` background, `24px` padding, a `12px` border radius, and a `rgba(36, 36, 36, 0.05) 0px 4px 8px 0px` box shadow. Inside, add a small numbered tag, a heading 'Connect your calendar' in 'Cal Sans' at 20px, and body text 'We'll handle all the cross-referencing' in 'Cal Sans UI' at 16px."

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775928760847-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775928760847-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/5d7aa503-8cfa-49a4-bd3b-0c2f0f075c70-1777559863165-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/5d7aa503-8cfa-49a4-bd3b-0c2f0f075c70-1777559863165-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/5d7aa503-8cfa-49a4-bd3b-0c2f0f075c70-1777559863165-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/5d7aa503-8cfa-49a4-bd3b-0c2f0f075c70-1777559863165-preview-detail-poster.jpg |
