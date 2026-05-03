# Tailscale — Refero Style

- Refero URL: https://styles.refero.design/style/5b679fb6-8d53-402d-a77b-c88bfb397623
- Site URL: https://tailscale.com
- ID: 5b679fb6-8d53-402d-a77b-c88bfb397623
- Theme: light
- Industry: devtools
- Created: 2026-04-30T00:45:36.515Z
- Ranks: newest: 707, popular: 677, trending: 510

> Architectural technical blueprint.

## Description

Tailscale's design system uses a technical and understated aesthetic, built on a foundation of neutral grays and whites. Typography is compact and precise, maintaining clarity in dense information displays. Components are lightweight, favoring subtle borders and soft shadows over heavy fills or strong visual ornaments, contributing to an overall sense of efficiency and focus, punctuated by a single vibrant red accent color for critical actions.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Inkwell | #181717 | neutral | Primary text, headers, strong borders, dark surface elements |
| Paper White | #ffffff | neutral | Page backgrounds, card surfaces, ghost button backgrounds, default icon fills |
| Ghost Gray | #eeebea | neutral | Subtle borders, secondary card backgrounds, muted backgrounds |
| Carbon Gray | #2e2d2d | neutral | Secondary text, content backgrounds, button text on light backgrounds |
| Shadow Tint | #bdbcbb | neutral | Subtle shadow base color, divider lines |
| Parchment | #f7f5f4 | neutral | Hover states for light surfaces, subtle background shifts |
| Deep Plum | #575555 | neutral | Muted text, tertiary borders, less prominent icons |
| Ash Charcoal | #232222 | neutral | Pressed states for dark buttons, darker borders |
| Impact Red | #d04841 | brand | Red action color for filled buttons, selected navigation states, and focused conversion moments |
| Deep Sky Gradient | #5a82de | accent | Decorative background gradient used sparingly for visual interest |
| Backdrop Shadow | #000000 | neutral | Deepest shadow tint, overlay backdrops |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | system-ui, sans-serif | 300, 400, 500, 600 | 12px, 14px, 16px, 20px, 32px, 48px, 64px | 1.20, 1.43, 1.50 | Primary typeface for all UI elements, body text, headlines, and captions. Its compact nature supports information density without sacrificing legibility. |
| MDIO | Inter, system-ui, sans-serif | 400, 500 | 12px, 14px, 20px | 1.20, 1.50 | Used for specific secondary navigation or stylized text, providing a slightly more structured feel with increased letter-spacing. |
| Arial | system-ui, sans-serif | 400, 600, 700 | 14px, 16px | 1.50 | A fallback typeface for specific body text or legacy components, favoring slightly tighter letter spacing for efficiency. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.43 | 0 |
| body-sm | 14 | 1.43 | 0 |
| body | 16 | 1.5 | 0 |
| subheading | 20 | 1.2 | -0.2 |
| heading | 32 | 1.2 | -0.32 |
| heading-lg | 48 | 1.2 | -0.96 |
| display | 64 | 1.2 | -1.92 |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "9999px",
    "cards": "16px",
    "buttons": "8px",
    "hero-card": "32px"
  },
  "elementGap": "12px",
  "sectionGap": "24px",
  "cardPadding": "12px",
  "pageMaxWidth": null
}
```

## Components

### Pill Button

**Role:** Rounded button for secondary actions or tags.

Background: Paper White (#ffffff), Text: Carbon Gray (#2e2d2d), Border: Ghost Gray (#eeebea), Radius: 9999px. Padding: 0px vertical, 18px horizontal.

### Default Button

**Role:** Standard button for general actions.

Background: Inkwell (#181717), Text: Paper White (#ffffff), Border: Inkwell (#181717), Radius: 8px. Padding: 10px vertical, 12px horizontal.

### Outlined Button

**Role:** Secondary action button with a defined border.

Background: rgba(0, 0, 0, 0), Text: Inkwell (#181717), Border: Inkwell (#181717), Radius: 8px. Padding: 10px vertical, 12px horizontal.

### Call to Action Button

**Role:** Prominent button for primary user actions.

Background: Impact Red (#d04841), Text: Paper White (#ffffff), Border: Impact Red (#d04841), Radius: 8px. Padding: 0px vertical, 12px horizontal. Text uses Inter weight 600.

### Feature Card

**Role:** Information container for individual features or content blocks.

Background: Paper White (#ffffff), Radius: 16px, Shadow: rgba(24, 23, 23, 0.02) 0px 4px 8px 0px. Padding: 32px.

### Hero Information Card

**Role:** Enlarged card within hero sections, often for key information.

Background: Paper White (#ffffff), Radius: 32px, Shadow: rgba(24, 23, 23, 0.02) 0px 4px 8px 0px. Padding: 64px.

### Dark Content Card

**Role:** Card variant for displaying content on a dark background.

Background: Carbon Gray (#2e2d2d), Radius: 32px, No Shadow. Padding: 64px vertical, 48px horizontal.

### Navigation Link

**Role:** Interactive text link for navigation menus.

Text: Inkwell (#181717), No explicit background or border. Text uses Inter weight 500 at 16px, letter-spacing -0.16px.

### Privacy Consent Banner

**Role:** Persistent notification at the bottom of the page.

Background: Paper White (#ffffff), Text: Inkwell (#181717), Border: Inkwell (#181717) 1px solid. Functions as an overlay with backdrop rgba(0,0,0,0.24).

## Do's

- Use Inkwell (#181717) for all primary body text and main headings to ensure strong contrast.
- Apply Ghost Gray (#eeebea) for subtle visual separation, such as thin borders or as a background for secondary surfaces.
- Reserve Impact Red (#d04841) exclusively for primary call-to-action buttons and essential brand accents.
- Prioritize Inter at compact sizes (12-16px) with normal letter-spacing for denser information, such as body text or navigation items.
- Maintain a default border-radius of 8px for most interactive elements and 16px for cards and larger containers.
- Employ the subtle shadow rgba(24, 23, 23, 0.02) 0px 4px 8px 0px for cards and elevated components to provide minimal depth.
- Utilize 12px for consistent internal spacing within components and between closely related elements.

## Don'ts

- Do not introduce new vibrant colors outside of the defined Impact Red (#d04841) to maintain the restrained aesthetic.
- Avoid heavy drop shadows or strong gradients on common UI elements; elevation should be subtle.
- Refrain from using Arial for new components or primary text. Inter is the canonical typeface.
- Do not deviate from the established radius values; a consistent 8px for buttons and 16px for cards is key.
- Do not use highly saturated primary colors for text or backgrounds unless it’s the Impact Red (#d04841) for a CTA.
- Avoid large letter-spacing for body text; only use MDIO with increased letter-spacing for specific stylized elements.
- Do not use dark backgrounds for full sections; the primary theme is light with occasional dark cards.

## Layout

The page primarily uses a max-width contained layout, approximately 1200px wide, centered within the browser. The hero section often features a large, centered headline over a light background, sometimes paired with a dark card containing contextual information. Section rhythm is driven by consistent vertical spacing (sectionGap of 24px) between content blocks, with alternating light and very occasional dark surface treatments creating visual breaks. Content is arranged in alternating text-left/image-right patterns or multi-column card grids (e.g., 3-column features). The navigation is a sticky top bar, providing an always-available global menu.

## Imagery

The visual language focuses on clear product communication. Imagery includes precise product screenshots and abstract vector icons, typically rendered in monochromatic tones or with subtle brand color accents. Photography is minimal, almost absent, favoring a direct, UI-centric presentation. Icons are outlined or filled with a medium stroke weight and are primarily functional and descriptive, not decorative. Imagery supports technical explanations rather than creating atmosphere.

## Elevation

| Element | Style |
| --- | --- |
| Card | rgba(24, 23, 23, 0.02) 0px 4px 8px 0px |
| Elevated Component | rgba(24, 23, 23, 0.16) 0px 4px 16px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Figma | Monochromatic interface with a strong, single accent color and compact typography. |
| Linear | Focus on high information density, crisp typography, and minimal, yet effective use of elevation. |
| Notion | White space dominant layouts, system-like typography, and subtle functional elements for productivity. |
| Vercel | Clean, technical aesthetic with strong neutral palette, subtle shadows, and functional accent colors. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- text: #181717
- background: #eeebea
- border: #eeebea
- accent: #d04841
- primary action: #d04841 (filled action)

Example Component Prompts:
- Create a section divider: 1px solid Inkwell (#181717) at 50% opacity, width 100%, with 24px vertical padding. Text: 'Related Resources' in Carbon Gray (#2e2d2d) Inter weight 400, 16px, centered.
- Design a primary call-to-action button: Text 'Get Started' in Inter weight 600, 16px, Paper White (#ffffff). Background Impact Red (#d04841), 8px radius. Padding 10px vertical, 12px horizontal.
- Build a feature card for the hero: Background Paper White (#ffffff), 32px radius, with a subtle box-shadow (rgba(24, 23, 23, 0.02) 0px 4px 8px 0px). Inner content should have 64px padding. Headline 'Zero Trust Security' in Inkwell (#181717) Inter weight 600, 32px, letter-spacing -0.32px.
- Create a ghost button: Text 'Learn More' in Inkwell (#181717) Inter weight 500, 16px, background transparent, border Inkwell (#181717) 1px solid, 8px radius. Padding 10px vertical, 12px horizontal.
- Generate a secondary navigation link: Text 'Docs' in Inkwell (#181717) Inter weight 500, 16px, with no specific background or border. On hover, text color changes to Impact Red (#d04841).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509908505-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509908505-thumb.jpg |
