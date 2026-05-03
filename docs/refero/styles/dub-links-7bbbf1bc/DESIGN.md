# Dub Links — Refero Style

- Refero URL: https://styles.refero.design/style/7bbbf1bc-e375-4200-8d71-e373a3c78654
- Site URL: https://dub.sh
- ID: 7bbbf1bc-e375-4200-8d71-e373a3c78654
- Theme: light
- Industry: devtools
- Created: 2026-01-14T17:41:13.000Z
- Ranks: newest: 1316, popular: 522, trending: 782

> Clean workbench, energetic highlight. The interface feels like a well-organized array of digital tools on a bright surface, with a single, clear visual thread guiding user action.

## Description

Dub presents a precise, pragmatic aesthetic, reminiscent of a clean workbench for digital tools. Its foundation is a crisp, highly functional gray scale complemented by a single energetic orange accent, creating focused visual hierarchy without unnecessary embellishment. Subtle shadow work and soft border radii on interactive elements provide a contemporary feel while maintaining directness, avoiding distraction for the product-focused user.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Ghost White | #ffffff | neutral | Page backgrounds, card surfaces, form inputs. |
| Ash Gray | #fcfcfc | neutral | Subtle background for UI sections, differentiating content blocks without high contrast. |
| Cloud Gray | #e5e5e5 | neutral | Divider lines, subtle borders on cards and input fields, non-interactive elements. |
| Cool Gray | #d4d4d4 | neutral | Input borders, inactive states, more prominent dividers. |
| Steel Gray | #a3a3a3 | neutral | Secondary text, disabled states, placeholder text in inputs. |
| Jet Black | #171717 | neutral | Primary text, main headlines, essential UI elements, high-contrast buttons for calls to action. |
| Ink Black | #0a0a0a | neutral | Link text, prominent text labels, navigation items for strong emphasis. |
| Ember Glow | #f97316 | accent | Primary call-to-action buttons, active states, key interactive elements — this vivid orange is the sole accent, drawing immediate user attention. |
| Sky Blue | #3b82f6 | semantic | Informational badges, occasional icons, secondary actionable items. |
| Forest Green | #16a34a | semantic | Success messages, positive status indicators. |
| Warning Red | #d32f2f | semantic | Error messages, destructive actions. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | system-ui, sans-serif | 400, 500, 600, 700 | 12px, 14px, 16px, 18px, 20px, 24px | 1.00, 1.25, 1.33, 1.40, 1.43, 1.50, 1.56 | Primary typeface for all body text, UI labels, buttons, navigation, and most headings. Its clean, legible nature supports the product's functional aesthetic across various contexts. |
| Satoshi | system-ui, sans-serif | 500 | 40px, 48px | 1.00, 1.15 | Used for prominent display headings, like 'Short links with superpowers', establishing a modern and authoritative voice for key messages. |
| GeistMono | SFMono-Regular, Consolas, Liberation Mono, Menlo, monospace | 400 | 12px, 13px, 14px | 1.00, 1.33, 1.43, 1.50 | Monospaced font for code snippets, technical details, and certain data displays, providing visual distinction for technical content. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 |  |
| body-sm | 14 | 1.43 |  |
| body | 16 | 1.5 |  |
| subheading | 18 | 1.4 |  |
| heading-sm | 20 | 1.25 |  |
| heading | 24 | 1.33 |  |
| heading-lg | 40 | 1.15 |  |
| display | 48 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "pill": "9999px",
    "cards": "12px",
    "buttons": "8px",
    "default": "4px"
  },
  "elementGap": "8px",
  "sectionGap": "64px",
  "cardPadding": "16px",
  "pageMaxWidth": "1280px"
}
```

## Components

### Link Shortener Input Group



### Button Group — Primary, Secondary & Ghost



### Link Editor Form Card



### Primary Call-to-Action Button

**Role:** Main interactive button

Solid Ember Glow (#f97316) background with Ghost White (#ffffff) text, 8px border radius, 12px horizontal and 8px vertical padding. Focuses user action with vibrant color.

### Secondary Button

**Role:** Alternative action button

Ghost White (#ffffff) background with Jet Black (#171717) text, border in Cool Gray (#d4d4d4), 8px border radius, 12px horizontal and 8px vertical padding. Offers a less assertive option against the page background.

### Icon Button

**Role:** Small, icon-only button

Transparent background with Steel Gray (#a3a3a3) icon, 9999px border radius (pill shape), 8px padding all around. Typically used for navigation or controls within tables/lists.

### Text Input Field

**Role:** Standard editable text input

Ghost White (#ffffff) background, Jet Black (#171717) text, Cool Gray (#d4d4d4) border, 6px border radius, 12px horizontal and 8px vertical padding. Designed for clear data entry.

### Input with Button Group

**Role:** Combined input and action button

Input has Ghost White (#ffffff) background, Jet Black (#171717) text, Cool Gray (#d4d4d4) border with 0px radius on one side and 6px on the other. Button directly adjoined with Ember Glow (#f97316) background. Creates a single, cohesive interactive unit.

### Card Container

**Role:** Information grouping container

Ghost White (#ffffff) background with a subtle shadow (rgba(0, 0, 0, 0.05) 0px 1px 2px 0px), 12px border radius, 16px internal padding. Used to visually group related content.

### Navigation Link

**Role:** Top navigation item

Ink Black (#0a0a0a) text without underline in normal state. Subtle gray hover/active states via background or text color change. Font is Inter weight 500 at 16px. Clean, direct access to main sections.

### Small Pill Tag

**Role:** Categorization or meta-info tag

Background color varies based on status (e.g., Forest Green #dcfce7, Sky Blue #dbeafe with corresponding text colors), with 9999px border radius (full pill) and 6px horizontal, 2-3px vertical padding. Used for concise labels.

## Do's

- Prioritize Ember Glow (#f97316) exclusively for the primary call-to-action to maximize visual impact and guide user flow.
- Use Jet Black (#171717) for all main headlines and body text to ensure strong readability and visual authority.
- Apply 8px border radius to all buttons to provide a soft, approachable feel while maintaining structure.
- Utilize Cloud Gray (#e5e5e5) as a subtle horizontal divider between sections or within complex UI elements to maintain a clean layout without harsh lines.
- Maintain consistent internal padding of 16px for card components to create breathing room for content.
- Ensure all interactive elements, especially inputs and buttons, have a visible border in Cool Gray (#d4d4d4) or equivalent for clear affordance.
- Employ the Inter typeface at weight 400 for all body copy to maintain legibility and a professional tone.

## Don'ts

- Do not introduce additional vibrant accent colors; the Ember Glow (#f97316) is designed to be the single point of visual emphasis.
- Avoid using harsh, high-contrast borders for content containers; opt for subtle shadows or lighter gray borders like Cloud Gray (#e5e5e5).
- Do not use highly decorative fonts for body text or UI labels; stick to Inter for clarity and consistency.
- Refrain from excessive use of bold typography; reserve higher weights (600, 700) for specific emphasis on headings or key phrases.
- Do not deviate from the established spacing scale (multiples of 4px) to ensure uniform layout and rhythm.
- Avoid heavy or complex drop shadows; use the subtle rgba(0, 0, 0, 0.05) 0px 1px 2px 0px shadow for elevation.
- Do not use dark backgrounds extensively; the design relies on a light theme with ample white space.

## Elevation

| Element | Style |
| --- | --- |
| Button | rgba(0, 0, 0, 0.05) 0px 1px 2px 0px |
| Card Container | rgba(0, 0, 0, 0.05) 0px 1px 2px 0px |
| Dropdown/Popover | rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.1) 0px 2px 4px -2px |
| Input focus | rgba(0, 0, 0, 0.1) 0px 0px 0px 4px |

## Similar Brands

| Business | Why |
| --- | --- |
| Vercel | Shares a similar minimal, clean interface with a strong focus on functional typography and a restrained color palette, often using a single strong accent color. |
| Linear | Exhibits a product-focused design, relying on sharp UI elements, system-like typography, and a clear, pragmatic approach to information hierarchy, often with subtle gray progressions and controlled pops of color. |
| Stripe | Uses a similar light theme with ample white space, strong geometric typography, and a distinct lack of heavy shadows, preferring crisp borders and controlled use of accent colors for interactive elements. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text (primary): #171717
- Background (page): #ffffff
- CTA (primary): #f97316
- Border (input): #d4d4d4
- Accent (info): #3b82f6

### 3-5 Example Component Prompts
1. Create a `Primary Call-to-Action Button`: background Ember Glow (#f97316), text Ghost White (#ffffff), font Inter weight 500 size 16px, border radius 8px, padding 8px vertical, 12px horizontal.
2. Design a `Text Input Field`: background Ghost White (#ffffff), text Jet Black (#171717), border Cool Gray (#d4d4d4), border radius 6px, padding 8px vertical, 12px horizontal, placeholder text Steel Gray (#a3a3a3), font Inter weight 400 size 16px.
3. Build a `Card Container`: background Ghost White (#ffffff), border radius 12px, box-shadow rgba(0, 0, 0, 0.05) 0px 1px 2px 0px, internal padding 16px.
4. Create a `Display Headline`: text Ink Black (#0a0a0a), font Satoshi weight 500 size 48px, line-height 1.0.
5. Render a `Small Pill Tag` for an 'active' state: background Forest Green (#dcfce7), text Forest Green (#16a34a), border radius 9999px, padding 3px vertical, 6px horizontal, font Inter weight 400 size 12px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923096449-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923096449-thumb.jpg |
