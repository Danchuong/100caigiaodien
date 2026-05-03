# Railway — Refero Style

- Refero URL: https://styles.refero.design/style/5c32375f-6ef1-4345-9418-ebbb7e887343
- Site URL: https://railway.app
- ID: 5c32375f-6ef1-4345-9418-ebbb7e887343
- Theme: dark
- Industry: devtools
- Created: 2026-03-12T11:41:59.000Z
- Ranks: newest: 1049, popular: 132, trending: 383

> Cosmic Midnight Express. A calm, powerful journey through a dark, starlit environment, guided by clear signals.

## Description

The design system feels like a tranquil night journey on a futuristic train. It operates in a deep, near-black space (#13111c), punctuated by a single, focused accent of cosmic lilac (#553f83) for primary actions, creating a calm yet confident mood. Large, elegant serif headlines (IBM Plex Serif) provide a literary, almost classic authority that contrasts with the clean, utilitarian sans-serif (Inter) used for the UI. Elevation is achieved through subtle surface shifts and fine borders (#33323e) rather than shadows, reinforcing a flat, technical aesthetic. The signature element is the painterly, atmospheric hero illustration, which establishes a peaceful, imaginative tone that subverts typical dev-tool intensity.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Deep Space | #13111c | neutral | Primary page background. |
| Surface | #1a191f | neutral | Card backgrounds, secondary surfaces. |
| Crater | #33323 | neutral | Borders, UI dividers, subtle background elements. |
| Black Hole | #0d0c14 | neutral | Darkest UI components, code blocks. |
| Starlight | #f7f7f8 | neutral | Primary text, active navigation, icons. |
| Starlight Dim | #d0cfd2 | neutral | Subheadings, less prominent text. |
| Comet | #a1a0ab | neutral | Body copy, placeholder text, inactive-state UI. |
| Asteroid | #868593 | neutral | Helper text, metadata, disabled states. |
| Cosmic Lilac | #553f83 | brand | Primary CTA buttons — a calm but distinct call to action against the dark backdrop. |
| Supernova | #a05fcf | accent | Focus rings, active state borders, UI highlights — a brighter violet for interactive feedback. |
| Nebula Haze | #bf92ec | accent | Decorative highlights, accent text. |
| Warp Drive Glow | #a05fcf | brand | Decorative background effect — adds a powerful, futuristic energy. |
| Success | #42946 | semantic | Success indicators, confirmation messages. |
| Error | #d82c20 | semantic | Error messages and destructive action states. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| IBM Plex Serif | Georgia, Times New Roman | 400, 500 | 36px, 40px, 54px | 1.12, 1.20, 1.33 | Display headlines (54px) and large section titles (36-40px). The serif choice is a signature move, lending a classic, literary authority to a technical product. The tight negative letter-spacing is essential. |
| Inter | system-ui, -apple-system | 400, 500, 600, 700 | 12px, 14px, 16px, 18px, 20px, 24px | 1.25, 1.33, 1.40, 1.43, 1.50, 1.56, 1.60, 1.63, 1.75 | The workhorse font for all UI text, body copy, and subtitles. Its neutrality and readability provide a clean canvas that allows the serif headlines to stand out. |
| Inter Tight | Inter | 400, 600 | 32px, 40px | 1.20, 1.38 | Used for some medium-to-large headings, offering a slightly more condensed feel than Inter for specific layouts. |
| ui-monospace | Menlo, Monaco, Consolas | 400 | 16px, 40px | 1.40, 1.63 | Code snippets and log outputs in product demonstrations, providing a familiar terminal aesthetic. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 | -0.12 |
| body-sm | 14 | 1.5 | -0.14 |
| body | 16 | 1.6 | -0.1 |
| subheading | 18 | 1.5 | -0.09 |
| heading-sm | 24 | 1.33 |  |
| heading | 36 | 1.2 | -0.72 |
| heading-lg | 40 | 1.2 |  |
| display | 54 | 1.12 | -1.94 |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "9999px",
    "cards": "12px",
    "inputs": "6px",
    "buttons": "8px"
  },
  "elementGap": "8px",
  "sectionGap": "96-160px",
  "cardPadding": "32px",
  "pageMaxWidth": "1280px"
}
```

## Components

### CTA Button Group



### Deployment Success Toast + Tab Bar



### Testimonial Cards



### Primary CTA Button

**Role:** The main call-to-action, like 'Deploy →'.

Solid `Cosmic Lilac` (#553f83) background with `Starlight` (#f7f7f8) text. Padding is `12px 24px` with an `8px` border radius. Border is a subtle `rgba(255, 255, 255, 0.15)`. Font is Inter 500.

### Secondary Button

**Role:** Secondary actions, like 'Demo'.

Transparent background with `Starlight` (#f7f7f8) text and a `1px` solid border of `Crater` (#33323e). Padding is `12px 24px` with an `8px` border radius. Font is Inter 500.

### Navigation Link

**Role:** Header and footer navigation items.

Transparent background with `Comet` (#a1a0ab) text. On hover, text changes to `Starlight` (#f7f7f8). Padding is minimal, typically around `6px 12px`.

### Logo Grid Card

**Role:** Container for customer logos in the 'Trusted by' section.

`Surface` (#1a191f) background with a `12px` border radius and `24px` padding. A `1px` `Crater` (#33323e) border defines the card. Displays a grayscale partner logo at its center.

### Product UI Tab

**Role:** Navigation within the product UI demo.

Text label in `Asteroid` (#868593). The active tab has `Starlight` (#f7f7f8) text and a `2px` bottom border of `Supernova` (#a05fcf), providing a clear visual indicator.

### Success Toast

**Role:** A small notification for successful operations.

Dark green background (`#15231d`) with `Success` (#42946e) text and a `4px` border radius. A `1px` border of muted green (`#26543f`) provides subtle definition.

### Log Line Item

**Role:** A single line in the product's log viewer.

Uses `ui-monospace` font at 16px. Background is `Black Hole` (#0d0c14). Text color varies by log level, but defaults to `Comet` (#a1a0ab).

## Do's

- Use IBM Plex Serif exclusively for display-level headlines to create a sophisticated, literary feel.
- Rely on surface color shifts (`Deep Space` page, `Surface` cards) and 1px `Crater` borders for elevation.
- Reserve the `Cosmic Lilac` color for primary, high-value calls to action.
- Incorporate the atmospheric, painterly illustration style for hero sections to set the mood.
- Maintain generous vertical spacing (96px+) between content sections for a calm, spacious rhythm.
- Use a subtle grid pattern on the background of key container cards like testimonials.
- Ensure all interactive elements have a clear focus state, typically using `Supernova` (#a05fcf) as a highlight border or ring.

## Don'ts

- Don't use traditional box-shadows. The system's depth comes from color and borders.
- Don't use serif fonts for body copy, buttons, or any UI controls.
- Don't use the brand purples for large blocks of text.
- Don't make layouts feel dense or rushed. Prioritize breathing room.
- Don't use bright, saturated colors outside the defined purple accent and semantic palette.
- Don't use photography, especially lifestyle photos. The visual language is illustrative and product-focused.
- Don't create buttons or cards with sharp corners; use the established `8px` and `12px` radii.

## Layout

The layout is governed by a centered, max-width container of 1280px. It opens with an immersive, full-bleed hero featuring a large atmospheric illustration that sets a calm, imaginative tone. Subsequent content sections are contained within the max-width, separated by generous vertical spacing (96px+), creating a spacious, unhurried rhythm. The structure is largely composed of centered headline stacks, followed by multi-column grids for testimonials (3-column) and partner logos. This creates a clear, hierarchical flow from broad statements to specific proof points.

## Imagery

The visual language is defined by a dichotomy. Atmospheric, painterly illustrations with a lofi, dreamy quality dominate the hero and background elements, establishing a unique, non-corporate mood. These are juxtaposed with clean, unadorned product UI screenshots which anchor the site in its technical reality. Customer logos are presented simply on contained cards. There is no lifestyle photography; the focus is on the abstract mood and the concrete product. Icons are minimal, likely line-based, and used for functional UI rather than decoration.

## Similar Brands

| Business | Why |
| --- | --- |
| Vercel | Shares the high-contrast dark mode, minimalist UI, and use of a single accent color for a developer audience. |
| Linear | Similar layered dark surfaces, subtle gradients, and precise, border-defined UI components. |
| PlanetScale | Also combines a dark, refined aesthetic with an elegant serif font for headlines. |
| Supabase | Another dev-tool with a strong dark-mode identity and a clean, grid-based layout structure. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- **Page Background**: `Deep Space` (#13111c)
- **Card Background**: `Surface` (#1a191f)
- **Primary Text**: `Starlight` (#f7f7f8)
- **Body Text**: `Comet` (#a1a0ab)
- **Border**: `Crater` (#33323e)
- **CTA / Accent**: `Cosmic Lilac` (#553f83)
- **Focus Accent**: `Supernova` (#a05fcf)

### Example Component Prompts
1.  **Hero Section:** Create a full-bleed hero section with the painterly night sky illustration as the background. Add a centered headline 'Ship software peacefully' in 54px `IBM Plex Serif` font, `Starlight` (#f7f7f8) color, with -1.94px letter-spacing. Below it, create a Primary CTA Button with text 'Deploy →' and a Secondary Button with text 'Demo'.

2.  **Primary CTA Button:** Create a button with text 'Deploy →'. Use a `Cosmic Lilac` (#553f83) background, `Starlight` (#f7f7f8) text, 8px border radius, and `12px 24px` padding. The font should be 16px Inter at weight 500.

3.  **Testimonial Card:** Create a card with a `Surface` (#1a191f) background, a 1px solid `Crater` (#33323e) border, and a 12px border radius. Padding should be 32px. Add a subtle 1px grid background pattern inside the card. Place a quote inside using `Starlight` (#f7f7f8) text at 18px and an attribution below it in `Comet` (#a1a0ab) text at 14px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775928941976-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775928941976-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/5c32375f-6ef1-4345-9418-ebbb7e887343-1777567025468-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/5c32375f-6ef1-4345-9418-ebbb7e887343-1777567025468-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/5c32375f-6ef1-4345-9418-ebbb7e887343-1777567025468-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/5c32375f-6ef1-4345-9418-ebbb7e887343-1777567025468-preview-detail-poster.jpg |
