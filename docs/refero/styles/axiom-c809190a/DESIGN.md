# Axiom — Refero Style

- Refero URL: https://styles.refero.design/style/c809190a-035c-458d-87ed-4758807dd84e
- Site URL: https://axiom.co
- ID: c809190a-035c-458d-87ed-4758807dd84e
- Theme: dark
- Industry: devtools
- Created: 2026-01-25T11:58:03.000Z
- Ranks: newest: 1277, popular: 257, trending: 308

> Dark Matter Console — a vast, organized digital workspace with critical data highlighted by a vibrant, focused glow.

## Description

Axiom's design evokes a high-tech data interface, offering clarity and focus within a rich, dark environment. The foundational black (#000000) coupled with various shades of dark gray creates a deep, layered surface system without relying on heavy shadows. A single vivid orange (#DA5C2C) serves as the primary accent, providing clear calls to action and visual emphasis against the monochromatic backdrop. The minimal use of rounded corners (primarily 2px) maintains an industrial, precise feel, only softened by 9999px pill shapes for very specific interactive elements.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Page backgrounds, significant section dividers, default text in light contexts. |
| Deep Graphite | #111111 | neutral | Interface backgrounds like header and primary navigation, providing a subtle lift from the absolute black. |
| Charcoal Surface | #191919 | neutral | Card backgrounds, secondary interactive elements, providing a distinct, darker surface layer. |
| Dark Slate | #202020 | neutral | Text color for less prominent information, borders of unselected interactive elements. |
| Medium Gray | #3a3a3a | neutral | Most secondary text, disabled states, borders for subtle separation. |
| Stone Accent | #606060 | neutral | Placeholder text, minor body text, subtle iconography. |
| Light Steel | #b4b4b4 | neutral | Primary body text in dark contexts, button text in secondary states. |
| Almost White | #eeeeee | neutral | Dominant text color for headings and bold statements against dark backgrounds, inverse button backgrounds. |
| Highlight Orange | #DA5C2C | brand | Primary call-to-action buttons, active states, key data visualizations — this vivid color draws immediate attention against the dark palette. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| BerkeleyMono | IBM Plex Mono | 400, 700 | 12px, 13px, 14px, 16px, 18px, 20px, 24px, 32px | 1.00, 1.25, 1.33, 1.40, 1.43, 1.50, 1.56, 1.57, 1.71 | Primary display font for headlines, body copy, and UI elements. Its monospace nature grounds the design in a technical, precise aesthetic, emphasizing the data-driven focus of the brand. |
| Inter | Inter | 400 | 12px, 14px, 16px | 1.33, 1.43, 1.50 | Secondary sans-serif font for supplemental information, short descriptions, and helper texts, providing readability when the monospace style might be too strong. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 |  |
| body | 14 | 1.43 |  |
| heading | 20 | 1.4 |  |
| heading-lg | 24 | 1.33 |  |
| display | 32 | 1.25 |  |

## Spacing & Shape

```json
{
  "radius": {
    "pill": "9999px",
    "default": "2px"
  },
  "elementGap": "8px",
  "sectionGap": "40px",
  "cardPadding": "32px",
  "pageMaxWidth": null
}
```

## Components

### Hero CTA Button Group



### Announcement Banner



### Testimonial Cards



### Primary Call-to-Action Button

**Role:** Interactive element

Solid `Highlight Orange` (#DA5C2C) background with `Almost White` (#eeeeee) text. `BerkeleyMono` weight 400. `2px` border-radius. Padding: `0px` top/bottom, `16px` left/right.

### Outlined Button

**Role:** Interactive element

Transparent background with an `Almost White` (#eeeeee) fill, `Midnight Ink` (#000000) text. `2px` border-radius. Padding: `0px` top/bottom, `16px` left/right. Used for secondary actions, mirroring the primary button's form factor.

### Ghost Navigation Button

**Role:** Interactive navigation element

Transparent background with `Light Steel` (#b4b4b4) text. `2px` border-radius. No explicit padding (0px), blending into the navigation bar.

### Feature Card

**Role:** Content display

Uses `Charcoal Surface` (#191919) as background directly. Text is `Almost White` (#eeeeee) for headings and `Light Steel` (#b4b4b4) for body. Features `2px` radius and internal padding of `32px`.

### Input Field

**Role:** Form element

Background matches `Charcoal Surface` (#191919) or `Deep Graphite` (#111111). Borders are `Medium Gray` (#3a3a3a). Placeholder text is `Stone Accent` (#606060). Focus ring subtle, likely a glow or border change to `Highlight Orange`.

## Do's

- Use `Midnight Ink` (#000000) for page backgrounds and `Deep Graphite` (#111111) for primary UI surfaces like headers and footers.
- Apply `Highlight Orange` (#DA5C2C) exclusively for primary calls to action and active states, ensuring high visibility.
- Maintain a `2px` border-radius for all interactive elements and content cards to preserve the precise, defined aesthetic.
- Utilize `BerkeleyMono` for headlines and key information at various weights and sizes from `12px` to `32px` to convey a technical, authoritative tone.
- Provide ample internal padding of `32px` for feature cards and other content blocks to prevent a cramped feel within dark surfaces.
- Use `b4b4b4` as primary body text color on dark backgrounds for optimal readability and a consistent soft contrast.

## Don'ts

- Avoid using `Highlight Orange` (#DA5C2C) for decorative purposes or non-interactive elements, as it dilutes its impact as a CTA.
- Do not introduce additional vibrant colors; rely solely on the defined color palette to maintain visual discipline.
- Refrain from using strong, diffuse shadows; subtle box shadows like `rgba(0, 0, 0, 0.05) 0px 1px 2px 0px` are acceptable only for hints of elevation.
- Do not deviate from the `2px` border-radius for most elements; reserve `9999px` for specific pill-shaped components only.
- Avoid large variations in letter spacing; stick to 'normal' for both `BerkeleyMono` and `Inter` unless explicitly called for in a specific component.
- Do not use generic gray values for borders; default to `Medium Gray` (#3a3a3a) or `Dark Slate` (#202020) for consistency.

## Layout

The site uses a full-bleed page model, where the dark background extends to the edges of the viewport. Content within sections is centrally aligned with generous horizontal padding, suggesting a maximum content width though not strictly constrained. The hero section features a full-bleed dark background with a large, centered headline and calls to action. Sections alternate between solid dark backgrounds for content and black backgrounds for separating larger blocks. Content is arranged in stacked blocks, occasionally using two-column layouts for text-plus-callout or feature cards. A prominent 3-column grid is used for customer testimonials/features. Spacing between sections is consistent at `40px` or `64px`, providing ample breathing room. The navigation is a sticky top bar.

## Imagery

This design primarily relies on UI elements and data visualizations, rather than traditional imagery. Product screenshots of the Axiom observability dashboard are integrated directly into the layout, often with a dark theme consistent with the site's overall aesthetic. These are contained, not full-bleed, and serve an explanatory rather than decorative role. Iconography is simple, line-based, and monochromatic, typically rendered in `Light Steel` (#b4b4b4) or `Medium Gray` (#3a3a3a). There are no photographs or complex illustrations, emphasizing a practical, data-focused experience.

## Elevation

| Element | Style |
| --- | --- |
| Card | box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px |
| Button | box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Vercel | Shares a strong dark-mode aesthetic with crisp, technically-oriented typography and a single bright accent color for CTAs. |
| Supabase | Employs a similar high-contrast dark theme, monospace fonts for code and data, and a focus on developer tools with clear, functional UI. |
| Linear | Features a highly refined dark UI with subtle surface variations, precise typography, and minimal use of color to distinguish interactive elements. |
| Datadog | Utilizes a dark background for its monitoring and observability dashboards, often with distinct colored elements for alerts and data visualization. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text (dominant): #eeeeee
- Text (secondary): #b4b4b4
- Background (page): #000000
- Background (card): #191919
- CTA: #DA5C2C
- Border: #3a3a3a

### 3-5 Example Component Prompts
1. Create a primary CTA button: `Highlight Orange` background (#DA5C2C), `Almost White` text (#eeeeee), `BerkeleyMono` weight 400, size 16px, `2px` border-radius, `0px 16px` padding. Add subtle `rgba(0, 0, 0, 0.05) 0px 1px 2px 0px` box shadow.
2. Create a feature card: `Charcoal Surface` background (#191919), `2px` border-radius, `32px` padding on all sides. Headline `Almost White` text (#eeeeee), `BerkeleyMono` weight 700, size 24px. Body text `Light Steel` (#b4b4b4), `BerkeleyMono` weight 400, size 14px.
3. Create a navigation link: No background, `Light Steel` text (#b4b4b4), `BerkeleyMono` weight 400, size 14px. No padding or border-radius, blends into `Deep Graphite` (#111111) header.
4. Create a hero headline: `Almost White` text (#eeeeee), `BerkeleyMono` weight 700, size 32px, line height 1.25. Set directly on `Midnight Ink` (#000000) background. Below it, add body text: `Light Steel` (#b4b4b4), `BerkeleyMono` weight 400, size 18px, line height 1.56.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923322779-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923322779-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/c809190a-035c-458d-87ed-4758807dd84e-1777561953865-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/c809190a-035c-458d-87ed-4758807dd84e-1777561953865-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/c809190a-035c-458d-87ed-4758807dd84e-1777561953865-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/c809190a-035c-458d-87ed-4758807dd84e-1777561953865-preview-detail-poster.jpg |
