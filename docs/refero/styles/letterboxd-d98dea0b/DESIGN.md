# Letterboxd — Refero Style

- Refero URL: https://styles.refero.design/style/d98dea0b-00a4-4c15-b4a9-d196e2c3e4b4
- Site URL: https://letterboxd.com
- ID: d98dea0b-00a4-4c15-b4a9-d196e2c3e4b4
- Theme: dark
- Industry: media
- Created: 2026-02-26T16:22:10.000Z
- Ranks: newest: 1124, popular: 361, trending: 798

> Midnight Theater Screen

## Description

Letterboxd employs a film-noir inspired aesthetic, using a deep, nearly monochromatic dark mode to provide a cinematic backdrop for film content. The visual hierarchy is built on subtle color shifts and varied text weights rather than strong contrast. A single vivid green accent is reserved for interactive elements, creating clear focal points against the muted palette, reminiscent of a discreetly lit movie theater screen where only key information is highlighted.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #14181c | neutral | Page backgrounds, large surfaces |
| Charcoal Canvas | #202830 | neutral | Card backgrounds, elevated sections, subtle dividers |
| Shadow Gray | #2c3440 | neutral | Panel dividers, subtle fills distinguishing UI elements |
| Ghostly Grey | #586370 | neutral | Input borders, placeholder text, secondary text |
| Steel Text | #667788 | neutral | Body text, metadata, lower contrast links |
| Cloudburst Text | #778899 | neutral | Links, icons, slightly higher contrast body text |
| Mist Text | #8899aa | neutral | Secondary headings, list items, higher contrast body text |
| Ash Text | #99aabb | neutral | Primary body text, main links, prominent metadata |
| Porcelain Text | #ddeeff | neutral | High-contrast body links, hover states |
| Whiteout | #ffffff | neutral | Headlines, high-prominence text, primary button text |
| Deep Ocean | #445566 | neutral | Subtle button backgrounds, distinct but muted interactive surfaces |
| Electric Green | #00ac1c | brand | Primary call-to-action buttons, interactive elements — its vividness drives action |
| Vivid Green | #00e054 | accent | Link underlines, success states, subtle active indicators |
| Status Green | #00c030 | semantic | Badges, progress indicators, reinforces positive status messages |
| Star Dust | #c8d4e0 | neutral | Button text in active/hover states, high-contrast text on darker buttons |
| Golden Star | #ff9933 | accent | Rating icons, specific accent details in reviews or community feedback |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| GraphikWeb | Inter | 300, 400, 700 | 10px, 11px, 12px, 13px, 14px, 15px, 16px, 17px, 18px, 24px, 26px | 1.00, 1.20, 1.23, 1.25, 1.31, 1.38, 1.50, 1.54, 1.75, 2.00 | Primary sans-serif for UI elements, body text, and many headlines. Its geometric precision and wide range of weights provide both clarity and a structured feel, contrasting with the serif for display. Letter spacing is used subtly to tune readability at different sizes. |
| TiemposTextWeb | Source Serif Pro | 400, 700 | 15px, 22px | 1.20, 1.25, 1.67 | Used for specific body text sections and embedded content. The serif brings a touch of editorial sophistication, differentiating longer-form content or curated descriptions from the more functional UI elements. Normal letter spacing keeps it highly readable. |
| TiemposHeadlineWeb | Playfair Display | 700 | 36px | 1.33 | Exclusive to main headlines. This bold serif acts as a display face, providing a strong, elegant visual identity, echoing the classic movie poster typography aesthetic. Normal letter spacing ensures legibility at large sizes. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.5 | 0.83 |
| body | 15 | 1.5 | 0.083 |
| heading | 24 | 1.25 | -0.075 |
| display | 36 | 1.33 |  |

## Spacing & Shape

```json
{
  "radius": {
    "pill": "12-15px",
    "buttons": "3px",
    "default": "3px"
  },
  "elementGap": "4px",
  "sectionGap": "48px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Primary CTA Button Group



### Film Card Row



### Security Check Modal



### Primary Action Button

**Role:** Main call to action

backgroundColor: #00ac1c (Electric Green), color: #ffffff (Whiteout), borderRadius: 4px, padding: 0 24px (vertical alignment adjusted by line-height/flex for 0px padding)

### Secondary Ghost Button

**Role:** Alternative actions or secondary CTA

backgroundColor: rgba(0, 0, 0, 0) (transparent), color: #000000 (Blackout), borderRadius: 0px, padding: 30px 0 0 0. This button type is specifically used for text links that appear as buttons, with padding controlling their clickable/tap area.

### Standard Button

**Role:** General interactive buttons

backgroundColor: #445566 (Deep Ocean), color: #ffffff (Whiteout), borderRadius: 3px, padding: 16px 20px 18px 20px. BorderTopColor: #ffffff ensures a subtle white highlight on the top edge.

### Pill Button

**Role:** Filter tags, minor actions within lists

backgroundColor: #556677 (Deep Ocean - from component variants, interpreted), color: #c8d4e0 (Star Dust), borderRadius: 12px, padding: 0 12px. This pill shape is distinct from other buttons.

### Film Data Card

**Role:** Displaying film posters and metadata (e.g., in listings like 'Just Reviewed...')

backgroundColor: rgba(0, 0, 0, 0) (transparent), borderRadius: 0px, boxShadow: none, paddingBottom: 20px. These cards are minimal, relying on image content for structure not borders/backgrounds.

### Search Input Field

**Role:** Site-wide search functionality

backgroundColor: rgba(255, 255, 255, 0.25) (semi-transparent white overlay), color: #586370 (Ghostly Grey - placeholder), border: 1px solid #586370 (Ghostly Grey), borderRadius: 15px, padding: 6px 30px 6px 10px. The rounded pill shape is unique for inputs.

### Status Badge

**Role:** Indicating specific states or categories

backgroundColor: #00c030 (Status Green), color: #ffffff (Whiteout), borderRadius: 2px, padding: 3px 4px 2px 4px. Compact and high-contrast for immediate visibility.

### Modal Overlay

**Role:** For displaying critical alerts or secondary content

Modal has background #2c3440 (Shadow Gray) with a slight shadow, and a semi-transparent dark backdrop overlaying the main content. Text uses typical neutral colors like #99aabb (Ash Text) and #ffffff (Whiteout).

## Do's

- Use Midnight Ink (#14181c) for main page backgrounds to maintain a dark, immersive theme.
- Prioritize GraphikWeb for all UI text and body copy using weights 300, 400, or 700 with precise letter-spacing adjustments.
- Reserve TiemposHeadlineWeb 700 at 36px for dominant page titles to establish a classic, editorial feel.
- Apply Electric Green (#00ac1c) exclusively to primary call-to-action buttons to ensure maximum emphasis and clarity for interactions.
- Maintain a tight corner radius of 3px for most interactive elements, reserving 12-15px for distinct pill shapes on inputs and filter tags.
- Structure content with minimal card padding (0px) and transparent backgrounds, allowing image content to define visual blocks.
- Utilize a shallow drop shadow rgba(0,0,0,0.25) 0px 1px 5px 0px, rgba(0,0,0,0.35) 0px 1px 10px 0px for elevated panels/modals, differentiating them from flat surfaces without harshness.

## Don'ts

- Avoid using highly saturated colors for anything other than specific interactive elements or brand accents; maintain the subdued neutral palette.
- Do not introduce strong outlines or heavy box shadows on cards; the design relies on subtle background shifts for hierarchy.
- Do not deviate from GraphikWeb for UI elements or TiemposHeadlineWeb for main titles; these choices are core to the brand's typographic identity.
- Refrain from using arbitrary large padding on cards; their structural presence is derived from their content, not artificial spacing.
- Do not soften edges unnecessarily; the default 3px radius is a deliberate choice for a balanced, contemporary look, with round pill shapes reserved for specific interactive components.
- Do not use black text on the Midnight Ink background; high-contrast white or light gray text is essential for readability.

## Layout

The layout primarily uses a full-bleed dark background (Midnight Ink) for the entire page, creating an immersive container. The hero section features a large, cinematic full-width film still with centered, prominent white typography for headlines and a single, vivid green CTA button at its base. Content is largely arranged in distinct vertical sections, often employing multi-column grids (e.g., 3-column for film posters, 2-column for text+featurettes). Sections maintain consistent vertical spacing. The navigation is a sticky top bar, minimally styled with gray text and a subtle search input, allowing the content below to dominate. Overall, the density is comfortable with ample breathing room, balancing large visual elements with concise text blocks.

## Imagery

This site predominantly uses film posters and still images from movies, treated as primary content. Images are typically full-bleed within their content containers, with sharp, unmasked edges. There is no custom photography or illustration style. Product screenshots are rendered within device mockups when showcasing mobile features. Icons are filled and monochromatic, generally in the muted neutral palette or occasionally in the accent green, serving purely functional roles like navigation or status indicators. Image heavy, where visual content from films takes precedence in overall visual space.

## Similar Brands

| Business | Why |
| --- | --- |
| IMDb | Dark-mode interface with film poster grid layouts and emphasis on content imagery. |
| Spotify | Dark background with a single dominant accent color for interaction, and a clear content-first approach. |
| VG247 (gaming news) | Dark theme, prominent headlines, and editorial feel with distinct serif and sans-serif type pairing. |

## Custom Sections

### Agent Prompt Guide

**Quick Color Reference:**
- Text: #99aabb (Ash Text)
- Background: #14181c (Midnight Ink)
- CTA: #00ac1c (Electric Green)
- Border (general input/secondary): #586370 (Ghostly Grey)
- Headline: #ffffff (Whiteout)

**Example Component Prompts:**
1. Create a `Primary Action Button` with text 'Start Watching Now'. It should use Electric Green (#00ac1c) as background, Whiteout (#ffffff) for text, 4px borderRadius, and 24px horizontal padding. Font: GraphikWeb 400.
2. Design a `Film Data Card` displaying a movie poster. It should have a transparent background, 0px borderRadius, no box-shadow, and 20px padding at the bottom. Overlay film title 'The Drama (2026)' in Ash Text (#99aabb), GraphikWeb 400 15px, 1.5 lineHeight.
3. Implement a `Search Input Field`. Use a semi-transparent white background (rgba(255,255,255,0.25)), with a 1px solid Ghostly Grey (#586370) border, 15px borderRadius. Placeholder text 'Search films...' in Ghostly Grey (#586370), GraphikWeb 400 15px. Padding: 6px vertical, 10px left, 30px right.
4. Generate a `Modal Overlay` for a 'Security Check' message. The modal background should be Shadow Gray (#2c3440), with a box-shadow of `rgba(0,0,0,0.25) 0px 1px 5px 0px, rgba(0,0,0,0.35) 0px 1px 10px 0px`. Main text 'Security check' in Whiteout (#ffffff), TiemposHeadlineWeb 700 22px. Body text 'We've detected...' in Ash Text (#99aabb), GraphikWeb 400 15px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924740124-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924740124-thumb.jpg |
